// console.log(steg);

// steg.encode('hello',image)
// steg.decode(image)

var imagedataurl;
 
function readURL(input)
{
    var reader = new FileReader();
    reader.onload = function(e)
    {
       
        imagedataurl = e.target.result;
        // display images
        document.querySelector('#image1').src=e.target.result;
    }
    reader.readAsDataURL(input.files[0]);
}

function hideText()
{
    document.querySelector('#image2').src= steg.encode(document.querySelector('#text').value , imagedataurl);
    
}

function decode(input)
{
    var reader = new FileReader();
    reader.onload = function(e)
    {
        document.querySelector('#decode').innerText=steg.decode(e.target.result);
       
    }
    reader.readAsDataURL(input.files[0]);
}
