// login.js
function showPage(pageId) {
    document.querySelectorAll('.page').forEach(page => page.style.display = 'none');
    document.getElementById(pageId).style.display = 'block';
  }
  
  document.getElementById('login').addEventListener('submit', function () {
    const username = document.getElementById('loginUsername').value;
    // Simulate fetching user data from a database
    const userData = {
      username: username,
      age: 25,
      dob: '1998-01-01',
      contact: '123-456-7890'
    };
  
    // Display user data on the profile page
    document.getElementById('profileUsername').innerText = userData.username;
    document.getElementById('profileAge').innerText = userData.age;
    document.getElementById('profileDOB').innerText = userData.dob;
    document.getElementById('profileContact').innerText = userData.contact;
  
    showPage('profile');
  });
  