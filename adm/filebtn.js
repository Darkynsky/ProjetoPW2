document.querySelector("#arqimageP").addEventListener('change', function(){
    document.querySelector('.text1').textContent = this.files[0].name;
}); 
document.querySelector("#arqimageI").addEventListener('change', function(){
    document.querySelector('.text2').textContent = this.files[0].name;
});
document.querySelector("#arqimageGenero").addEventListener('change', function(){
    document.querySelector('.textGenero').textContent = this.files[0].name;
});