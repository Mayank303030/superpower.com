<button onclick="generateStory()">Generate Story</button>
<div id="story-container"></div>

<script>
  function generateStory() {
    // This is where you can write the code to generate a random story
    // You can use JavaScript to randomly select a story type (love, horror, comedian) and fill in the details
    // For the sake of this example, I will just generate a random number and display it as the story
    const randomNumber = Math.floor(Math.random() * 100);
    const storyContainer = document.getElementById("story-container");
    storyContainer.innerHTML = `<p>Your random number is: ${randomNumber}</p>`;
  }
</script>
