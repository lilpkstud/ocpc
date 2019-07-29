// Client ID and API key from the Developer Console
var CLIENT_ID = '';
var API_KEY = '';

// Array of API discovery doc URLs for APIs used by the quickstart
var DISCOVERY_DOCS = ["https://www.googleapis.com/discovery/v1/apis/calendar/v3/rest"];

// Authorization scopes required by the API; multiple scopes can be
// included, separated by spaces.
var SCOPES = "https://www.googleapis.com/auth/calendar.readonly";

var authorizeButton = document.getElementById('authorize_button');
var signoutButton = document.getElementById('signout_button');

/**
 *  On load, called to load the auth2 library and API client library.
 */
function handleClientLoad() {
  gapi.load('client:auth2', initClient);
}

/**
 *  Initializes the API client library and sets up sign-in state
 *  listeners.
 */
function initClient() {
  gapi.client.init({
    apiKey: API_KEY,
    clientId: CLIENT_ID,
    discoveryDocs: DISCOVERY_DOCS,
    scope: SCOPES
  }).then(function () {
    // Listen for sign-in state changes.
    gapi.auth2.getAuthInstance().isSignedIn.listen(updateSigninStatus);

    // Handle the initial sign-in state.
    updateSigninStatus(gapi.auth2.getAuthInstance().isSignedIn.get());
    authorizeButton.onclick = handleAuthClick;
    signoutButton.onclick = handleSignoutClick;
  }, function (error) {
    appendPre(JSON.stringify(error, null, 2));
  });
}

/**
 *  Called when the signed in status changes, to update the UI
 *  appropriately. After a sign-in, the API is called.
 */
function updateSigninStatus(isSignedIn) {
  if (isSignedIn) {
    authorizeButton.style.display = 'none';
    signoutButton.style.display = 'block';
    listUpcomingEvents();
  } else {
    authorizeButton.style.display = 'block';
    signoutButton.style.display = 'none';
  }
}

/**
 *  Sign in the user upon button click.
 */
function handleAuthClick(event) {
  gapi.auth2.getAuthInstance().signIn();
}

/**
 *  Sign out the user upon button click.
 */
function handleSignoutClick(event) {
  gapi.auth2.getAuthInstance().signOut();
}

/**
 * Append a pre element to the body containing the given message
 * as its text node. Used to display the results of the API call.
 *
 * @param {string} message Text to be placed in pre element.
 */
function appendPre(message) {
  var pre = document.getElementById('content');
  var textContent = document.createTextNode(message + '\n');
  pre.appendChild(textContent);
}

/**
 * Print the summary and start datetime/date of the next ten events in
 * the authorized user's calendar. If no events are found an
 * appropriate message is printed.
 */
function listUpcomingEvents() {
  gapi.client.calendar.events.list({
    'calendarId': 'primary',
    'timeMin': (new Date()).toISOString(),
    'showDeleted': false,
    'singleEvents': true,
    'maxResults': 10,
    'orderBy': 'startTime'
  }).then(function (response) {
    var events = response.result.items;
    console.log(events);

    if (events.length <= 0) {
      appendPre('No upcoming events found.');
      return;
    }

    var eventsEl = document.getElementById('events');
    var eventTemplateEl = document.getElementById('eventTemplate');

    for (i = 0; i < events.length; i++) {

      var event = events[i];

      var eventEl = eventTemplateEl.getElementsByClassName('event')[0].cloneNode(true);

      var evTitleEl = eventEl.getElementsByClassName('evTitle')[0];
      evTitleEl.innerText = event.summary;

      var evDateEl = eventEl.getElementsByClassName('evDate')[0];
      var start = moment(event.start.dateTime || event.start.date);
      var end = moment(event.end.dateTime || event.end.date);

      // https://momentjs.com/docs/#/displaying/format/
      evDateEl.innerText = start.format("dddd, MMMM Do YYYY");
      if (start.hour() > 0) {
        evDateEl.innerText += " at " + start.format("h:mm a");
      }
      if (end.hour() > 0) {
        evDateEl.innerText += " to " + end.format("h:mm a");
      }

      // https://www.google.com/maps/place/980+63rd+St,+West+Des+Moines,+IA+50266
      var evLocationEl = eventEl.getElementsByClassName('evLocation')[0];
      if (event.location) {
        var uri = 'https://www.google.com/maps/place/' + event.location;
        evLocationEl.innerHTML = '<a href="' + encodeURI(uri) + '" target="_blank">' + event.location + '</a>';
        // evLocationEl.innerText = event.location;
      } else {
        evLocationEl.innerText = '';
      }

      var evDescriptionEl = eventEl.getElementsByClassName('evDescription')[0];
      evDescriptionEl.innerText = event.description || '';

      eventsEl.appendChild(eventEl);
    }
  });
}

