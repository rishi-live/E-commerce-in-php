function email_validation(email)
      {
        // alert("Hello");
        // return false;
         // for quick view.

        // var Emaill = document.getElementById("user");
        // var Password = document.getElementById("pass");
        var filter = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;


         if (filter.test(email.value)){
             return true; 
               }
        else{
             return false;
         } 




      } 
    
