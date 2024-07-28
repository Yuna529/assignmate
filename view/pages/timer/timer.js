const hour = document.getElementById('hour');
const minute = document.getElementById('minute');
const second = document.getElementById('second');

const start = document.getElementById('start');
const stop = document.getElementById('stop');
const reset = document.getElementById('reset');

const disp = document.getElementById('disp');
const videoDisplay = document.getElementById('videoDisplay');

let interval = null;
let total = 0;
const videos = ['../../../public/assets/1.mp4','../../../public/assets/13.mp4'];

const totalValue = () => {
    total = Number(hour.value) * 3600 + Number(minute.value) * 60 + Number(second.value);
    console.log(`Total time in seconds: ${total}`);
};

const changeVideo = (timeLeft) => {
    if (timeLeft <= 0) {
        videoDisplay.src = videos[1]; // Play the second video when the timer ends
    } else if (videoDisplay.src !== videos[0]) {
        videoDisplay.src = videos[0]; // Play the first video while the timer is running
    }
};


const Timer = () => {
    total--;
    console.log(`Time left: ${total} seconds`);
    if (total >= 0) {
        const hr = Math.floor(total / 3600);
        const mt = Math.floor((total % 3600) / 60);
        const sc = total % 60;

        hour.value = hr;
        minute.value = mt;
        second.value = sc;
        
        changeVideo(total);
    } else {
        disp.innerText = "Time Over!!!";
        clearInterval(interval);
        changeVideo(total); // Ensure the second video plays when the timer ends
    }
};

start.addEventListener('click', () => {
    totalValue();
    clearInterval(interval);
    interval = setInterval(Timer, 1000);
    disp.innerText = "Timer Started";
    console.log("Start button clicked");
    changeVideo(total); // Play the first video immediately when the timer starts
});
stop.addEventListener('click', () => {
    clearInterval(interval);
    disp.innerText = "Timer Stopped";
    console.log("Stop button clicked");
});
reset.addEventListener('click', () => {
    clearInterval(interval);
    hour.value = 0;
    minute.value = 0;
    second.value = 0;
    disp.innerText = "Timer";
    console.log("Reset button clicked");
    videoDisplay.src = videos[0];
});
