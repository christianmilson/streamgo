// <ul> element to add to
const list  = document.getElementById('messages');

// Creates <p> node
const addParagraph = content => {
    let p = document.createElement('p');

    p.appendChild(document.createTextNode(content));

    return p;
}

// Adds new <li> to <ul>
const addMessage = obj => {
    let id          = obj.message_id;
    let message     = obj.message;
    let author      = obj.author;
    let created     = (new Date(obj.created_at)).toLocaleDateString('en-GB');

    // Create new <li> node
    let li  = document.createElement('li');

    li.setAttribute('data', `message-id-${id}`);

    // Create child div
    let div = document.createElement('div');

    // Add info about the given message
    div.appendChild(addParagraph(`Message: ${message}`));
    div.appendChild(addParagraph(`Author: ${author.first_name} ${author.last_name}`));
    div.appendChild(addParagraph(`Created: ${created}`));

    // Add div to <li> node
    li.appendChild(div);

    // Add <li> node to parent
    list.appendChild(li);
};

// API call to fetch messages
const request = fetch('/api/messages').then(response => response.json());

request.then(messages => {
    messages.data.forEach(message => addMessage(message));
});
