const signUpButton=document.getElementById('signUpButton');
const signInButton=document.getElementById('signInButton');
const signUpForm=document.getElementById('signUp');
const signInForm=document.getElementById('signIn');

signInButton.addEventListener('click',function(){
    signInForm.style.display="block";
    signUpForm.style.display="none";
})

signUpButton.addEventListener('click',function(){
    signInForm.style.display="none";
    signUpForm.style.display="block";
})
