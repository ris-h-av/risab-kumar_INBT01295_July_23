const apiKey = "in7pwBFllyRlzSGWMVePXindqapOsPQQ3sfPRpU2";

const options = {
    method: "GET",
    headers: {
        "X-APi-Key": apiKey,
    },
};

const btnEl = document.getElementById("btn");
const jokeEl = document.getElementById("joke");


async function getJoke() {
    const selectedOption = document.getElementById('apiOption').value;

    let apiURL;
    switch (selectedOption) {
        case 'option1':
            apiURL ='https://api.api-ninjas.com/v1/dadjokes?limit=1';
            try {
                jokeEl.innerText = "Finding a Joke for You...";
                btnEl.disabled = true;
                btnEl.innerText = "Loading...";
                const response = await fetch(apiURL, options);
                const data = await response.json();
        
                btnEl.disabled = false;
                btnEl.innerText = "Tell Me a Joke";
                jokeEl.innerText = data[0].joke;
            } catch (error) {
                jokeEl.innerText = "Error, Please Try Later.";
                btnEl.disabled = false;
                btnEl.innerText = "Tell Me a Joke";
            }
            console.log("Dad Joke");
            break;
        case 'option2':
            apiURL = 'https://api.api-ninjas.com/v1/chucknorris?';
            try {
                jokeEl.innerText = "Finding a Joke for You...";
                btnEl.disabled = true;
                btnEl.innerText = "Loading...";
                const response = await fetch(apiURL, options);
                const data = await response.json();
        
                btnEl.disabled = false;
                btnEl.innerText = "Tell Me a Joke";
                jokeEl.innerHTML = data.joke;
            } catch (error) {
                jokeEl.innerText = "Error, Please Try Later.";
                btnEl.disabled = false;
                btnEl.innerText = "Tell Me a Joke";
            }
            console.log("Riddlse");
            break;
        case 'option3':
            apiURL = 'https://api.api-ninjas.com/v1/jokes?limit=1';
            try {
                jokeEl.innerText = "Finding a Joke for You...";
                btnEl.disabled = true;
                btnEl.innerText = "Loading...";
                const response = await fetch(apiURL, options);
                const data = await response.json();
        
                btnEl.disabled = false;
                btnEl.innerText = "Tell Me a Joke";
        
                jokeEl.innerText = data[0].joke;
            } catch (error) {
                jokeEl.innerText = "Error, Please Try Later.";
                btnEl.disabled = false;
                btnEl.innerText = "Tell Me a Joke";
            }
            console.log("Jokes");
            break;
        default:
            jokeEl.innerText = "!--->Select Category<---!";
            return;
    }   
}