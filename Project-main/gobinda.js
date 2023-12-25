// api  image


async function fetchRandomImage1() {
  const response = await fetch('https://source.unsplash.com/random');
  const imageUrl = response.url;

  
  document.getElementById('randomImage1').src = imageUrl;
  
  
}
fetchRandomImage1();


async function fetchRandomImage2() {
  const response = await fetch('https://source.unsplash.com/random');
  const imageUrl = response.url;

  
  document.getElementById('randomImage2').src = imageUrl;
  
  
}

fetchRandomImage2();

async function fetchRandomImage3() {
  const response = await fetch('https://source.unsplash.com/random');
  const imageUrl = response.url;

  
  document.getElementById('randomImage3').src = imageUrl;
  
  
}
fetchRandomImage3();

fetchRandomImage4();
async function fetchRandomImage4() {
  const response = await fetch('https://source.unsplash.com/random');
  const imageUrl = response.url;

  
  document.getElementById('randomImage4').src = imageUrl;
  
  
}
fetchRandomImage4();