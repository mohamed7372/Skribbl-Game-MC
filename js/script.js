var inputName = document.getElementById('name-ply'),
    stepGame = document.getElementById('step-game'),
    namePlayer = document.getElementById('title-name-ply'),
    // control nbr of rounds
    minusRound = document.getElementById('minus-round'),
    nbrRound = document.getElementById('nbr-round'),
    addRound = document.getElementById('add-round'),
    // btn back and next
    btnBack = document.getElementById('btn-back'),
    btnNext = document.getElementById('btn-next'),
    // about room
    roomCode = document.getElementById('room-code'),
    createRoom = document.getElementById('create-room'),
    titleRoom = document.getElementById('title-room'),
    roomInput = document.getElementById('room-input'),
    btnNextRoom = document.getElementById('btn-valid-room'),
    // play btn
    btnPlay = document.getElementById('play-btn'),
    // btn setting
    btnSetting = document.getElementById('setting'),
    btnSetRetour = document.getElementById('set-retour'),
    // all blocs of start game
    homePageBloc = document.getElementById('home-page'),
    chooseCharacterBloc = document.getElementById('choose-character'),
    playGameBloc = document.getElementById('play-game'),
    roomBloc = document.getElementById('room-bloc'),
    setBloc = document.getElementById('set'),
    screenBloc = document.getElementById('screen-game');

var NP = '', // name player
    NRC = '', // name room code
    NCR = '', // name create room
    typeRoom = '';

// get a random name automaticelly
function getRandomString(length) {
    var randomChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    var result = '', i = 0;
    myIntr = setInterval(() => {
        result = randomChars.charAt(Math.floor(Math.random() * randomChars.length));
        inputName.value += result;
        i++;
        if (i >= length)
            clearInterval(myIntr);
    }, 500);
}

// start with set a name for his player
homePageBloc.style.display = 'flex';

// app function and set name in input auto
getRandomString(5);

// when press enter go to next step
inputName.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
        event.preventDefault();
        // set name player in global var
        NP = inputName.value;
        // hidden home page bloc
        homePageBloc.style.display = 'none';
        // set step 2 active
        stepGame.children[0].children[1].classList.add('active');
        // set name of player in h2
        namePlayer.innerHTML = NP;
        // show next and back btn
        btnBack.style.display = 'inline';
        btnNext.style.display = 'inline';
        // show choose character bloc
        chooseCharacterBloc.style.display = 'flex';
    }
});

// add rounds 
addRound.onclick = () => {
    var nbr = parseInt(nbrRound.innerHTML) + 1;
    nbrRound.innerHTML = nbr;
    if (nbr == 10)
        addRound.style.visibility = 'hidden';
    if (nbr > 1)
        minusRound.style.visibility = 'visible';
}

// minus rounds 
minusRound.onclick = () => {
    var nbr = parseInt(nbrRound.innerHTML) - 1;
    nbrRound.innerHTML = nbr;
    if (nbr == 1)
        minusRound.style.visibility = 'hidden';
    if (nbr < 10)
        addRound.style.visibility = 'visible';
}

// create room
createRoom.onclick = () => {
    // set input room
    roomInput.value = NRC;
    // hide btn next
    btnNext.style.visibility = 'hidden';
    chooseCharacterBloc.style.display = 'none';
    titleRoom.innerHTML = 'create room';
    roomBloc.style.display = 'flex';
}

// your room code
roomCode.onclick = () => {
    // set input room
    roomInput.value = NRC;
    // hide btn next
    btnNext.style.visibility = 'hidden';
    chooseCharacterBloc.style.display = 'none';
    titleRoom.innerHTML = 'your room code';
    roomBloc.style.display = 'flex';
}

// retour from room bloc to choose character bloc
btnBack.onclick = () => {
    // check before if room bloc is open
    if (roomBloc.style.display === 'flex') {
        // hide room bloc
        roomBloc.style.display = 'none';
        // show choose player bloc
        chooseCharacterBloc.style.display = 'flex';
        btnNext.style.visibility = 'visible';
    }
    else if (playGameBloc.style.display === 'flex') {
        // hide room bloc
        playGameBloc.style.display = 'none';
        // show choose player bloc
        chooseCharacterBloc.style.display = 'flex';
    }
    else if (chooseCharacterBloc.style.display === 'flex') {
        // hide room bloc
        chooseCharacterBloc.style.display = 'none';
        // show choose player bloc
        homePageBloc.style.display = 'flex';
    }
}

// go to last step
btnNext.onclick = () => {
    stepGame.children[0].children[2].classList.add('active');
    chooseCharacterBloc.style.display = 'none';
    btnNext.style.display = 'none';
    playGameBloc.style.display = 'flex';
}

// show button next if pass some number of character 
roomInput.onkeydown = () => {
    if (roomInput.value.length >= 6) 
        btnNextRoom.style.display = 'block';
    else 
        btnNextRoom.style.display = 'none';
}

// save name room
btnNextRoom.onclick = () => {
    if (typeRoom == 'RC') 
        NRC = roomInput.value;
    else if (typeRoom == "CR") 
        NCR = roomInput.value;
    // close bloc room
    roomBloc.style.display = 'none';
    // show choose player bloc
    chooseCharacterBloc.style.display = 'flex';
    btnNext.style.visibility = 'visible';
}

// start game
btnPlay.onclick = () => {
    playGameBloc.style.display = 'none';
    stepGame.style.display = 'none';
    btnNext.style.display = 'none';
    btnBack.style.display = 'none';
    screenBloc.style.display = 'block';
}

// go to setting 
btnSetting.onclick = () => {
    setBloc.style.display = 'block';
}

// retour to main
btnSetRetour.onclick = () => {
    setBloc.style.display = 'none';
}

// homePageBloc.style.display = 'none';
// chooseCharacterBloc.style.display = 'none';
// stepGame.style.display = 'none';