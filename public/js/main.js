function changeImage() 
{
    var image = document.getElementById('myImage');
    
    if (image.src.match("logoImg")) 
    {
        image.src = "images/logo_red.gif";
    } 
    if (image.src.match("images/logo_black.gif"))
    {
        image.src = "images/logo_red.gif";
    }
        else 
        {
            image.src = "images/logo_black.gif";
        }
}