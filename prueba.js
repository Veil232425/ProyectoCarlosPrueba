let modalArray = new Array();
for(var i=1; i < 11; i++){
      modalArray.push(document.getElementsByClassName(`close-animatedModal-${i}`).item(i));
      console.log(modalArray[i]);
      }