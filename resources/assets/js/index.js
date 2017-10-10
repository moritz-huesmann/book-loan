function checkform(thisform)
{
    if(thisform.anschaffungsjahr.value == null || thisform.anschaffungsjahr== " ") {
        alert ("Anschaffungsjahr eingeben");
        thisform.anschaffungsjahr.focus();
        thisform.anschaffungsjahr.select();
        return false;
        }
}