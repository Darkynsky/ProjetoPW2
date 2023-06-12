document.querySelector("#arqimageP").addEventListener('change', function(){
    document.querySelector('.text1').textContent = this.files[0].name;
}); 
document.querySelector("#arqimageI").addEventListener('change', function(){
    document.querySelector('.text2').textContent = this.files[0].name;
});
document.querySelector("#arqimagePEdit").addEventListener('change', function(){
    document.querySelector('.text3').textContent = this.files[0].name;
}); 
document.querySelector("#arqimageIEdit").addEventListener('change', function(){
    document.querySelector('.text4').textContent = this.files[0].name;
});
document.querySelector("#arqimageGenero").addEventListener('change', function(){
    document.querySelector('.textGenero').textContent = this.files[0].name;
});

