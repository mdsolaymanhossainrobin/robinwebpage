$(document).ready(function() {
     
     /*  CONTACT FORM
     ======================================*/
     $('input#form-name').click(function() {

               var form_name = $('input#form-name').val();

               if (form_name == missing_name)
                  {
                  $('input#form-name').css("color" , default_color);
                  $('input#form-name').val('');
                  }
                  else if (form_name == name_value)
                          {
                          $('input#form-name').val('');
                          $('input#form-name').css("color" , default_color);
                          }

     });

     $('input#form-mail').click(function() {

               var form_mail = $('input#form-mail').val();

               if (form_mail == missing_mail || form_mail == invalid_mail)
               {
               $('input#form-mail').css("color" , default_color);
               $('input#form-mail').val('');
               }
               else if (form_mail == mail_value)
                       {
                       $('input#form-mail').val('');
                       $('input#form-mail').css("color" , default_color);
                       }

     });

     $('textarea#form-message').click(function() {

               var message_content = $('textarea#form-message').val();

               if (message_content == missing_message || message_content == message_value)
                  {
                  $('textarea#form-message').css("color" , default_color);
                  $('textarea#form-message').val('');
                  }
     });

     $('#contact_form button#button').click(function() {

               var name = $('input#form-name').val();
               var email = $('input#form-mail').val();
               var comments = $('textarea#form-message').val();

               if (name == "" || name == missing_name || name == name_value)
                  {
                  $('input#form-name').css("color" , error_color);
                  $('input#form-name').val(missing_name);
                  return false;
                  }

               if (email == "" || email == invalid_mail || email == mail_value)
                  {
                  $('input#form-mail').css("color" , error_color);
                  $('input#form-mail').val(missing_mail);
                  return false;
                  }

               var atpos=email.indexOf("@");
               var dotpos=email.lastIndexOf(".");
               if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
                  {
                  $('input#form-mail').css("color" , error_color);
                  $('input#form-mail').val(invalid_mail);
                  return false;
                  }

               if (comments == "" || comments == message_value || comments == missing_message)
                  {
                  $('textarea#form-message').css("color" , error_color);
                  $('textarea#form-message').val(missing_message);
                  return false;
                   }

               $("div#contact_form input[type='text']").remove();
               $('div#contact_form textarea').remove();
               $('div#contact_form button').remove();
               $('div#result').append('<div id="loading"></div>');

               $.ajax({
                         type: 'post',
                         url: mail_script_url,
                         data: 'name=' + name + '&email=' + email + '&comments=' + comments,

                         success: function(results) {
                                   $('div#loading').remove();
                                   $('div#result').html(results);
                                   $(".success a").click(function(){ $("div.success").fadeOut("slow"); return false; });
                                   $(".error a").click(function(){ $("div.error").fadeOut("slow"); return false; });
                         }
               });

     });//GO click process ends here

     /*  COMMENT FORM
     ======================================*/
     $('input#author_name').click(function() {

               var author_name = $('input#author_name').val();

               if (author_name == missing_name)
                  {
                  $('input#author_name').css("color" , default_color);
                  $('input#author_name').val('');
                  }
                  else if (author_name == name_value)
                          {
                          $('input#author_name').val('');
                          $('input#author_name').css("color" , default_color);
                          }

     });
     
     $('input#author_email').click(function() {

               var author_mail = $('input#author_email').val();

               if (author_mail == missing_mail || author_mail == invalid_mail)
               {
               $('input#author_email').css("color" , default_color);
               $('input#author_email').val('');
               }
               else if (author_mail == mail_value)
                       {
                       $('input#author_email').val('');
                       $('input#author_email').css("color" , default_color);
                       }

     });
     
     $('input#author_url').click(function() {

               var author_url = $('input#author_url').val();

               if (author_url == website_value)
                  {
                  $('input#author_url').val('');
                  $('input#author_url').css("color" , default_color);
                  }

     });
     
     $('textarea#comment_content').click(function() {

               var comment_content = $('textarea#comment_content').val();

               if (comment_content == missing_message || comment_content == message_value)
                  {
                  $('textarea#comment_content').css("color" , default_color);
                  $('textarea#comment_content').val('');
                  }
     });
     
     $('#comment_button_container button').click(function() {

               var author_nick = $('input#author_name').val();
               var author_email = $('input#author_email').val();
               var author_website = $('input#author_url').val();
               var comment = $('textarea#comment_content').val();

               if (author_nick == "" || author_nick == missing_name || author_nick == name_value)
                  {
                  $('input#author_name').css("color" , error_color);
                  $('input#author_name').val(missing_name);
                  return false;
                  }

               if (author_email == "" || author_email == invalid_mail || author_email == mail_value)
                  {
                  $('input#author_email').css("color" , error_color);
                  $('input#author_email').val(missing_mail);
                  return false;
                  }

               var atpos=author_email.indexOf("@");
               var dotpos=author_email.lastIndexOf(".");
               if (atpos<1 || dotpos<atpos+2 || dotpos+2>=author_email.length)
                  {
                  $('input#author_email').css("color" , error_color);
                  $('input#author_email').val(invalid_mail);
                  return false;
                  }

               if (comment == "" || comment == message_value || comment == missing_message)
                  {
                  $('textarea#comment_content').css("color" , error_color);
                  $('textarea#comment_content').val(missing_message);
                  return false;
                   }
               
               if (author_website == website_value)
                  {
                  $('input#author_url').val('');
                  }

     });//GO click process ends here

});