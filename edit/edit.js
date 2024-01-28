var foto;
window.onload=function(){
    foto = new Foto(); 
}
function selectimage(){
    document.getElementById("foto-file").click();
}
function makegrayscale()
{
    foto.grayscale();
}
function makeBright()
{
    foto. makeBright();
}
function makeDark()
{
    foto.makeDark();
}
function makeBlur()
{
    foto.applyBlurFilter();
}
function makeEmboss()
{
    foto. applyEmbossFilter();
}
function makeSharp()
{
    foto. applySharpFilter();
}
function download()
{
    foto.export();
}
// top button
function crop()
{
    foto.cropSelected();
}

function flipvertically()
{
    foto.flipVertically();
}
