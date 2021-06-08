// validation script here
const inp_field = {
    first_name: /^[A-Za-z]+$/,
    last_name: /^[A-Za-z]+$/,
    email_id: /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/,
    phone_number:/^[0-9]{10}$/,
    country: /^[a-z\d]/i,
    message: /^[a-z\d]/i,
  }
  // /^[\+]?(\d{3})\)?(\d{3})?(\d{4})$/
  
  //spaces are not allowed in range
  //select all the input fields and add an onkeyup event listener to them
  
  const validate = (field, regex) => {
    if(regex.test(field.value)){
        field.className = 'form-control valid';
        (document.getElementById(field.name)) && document.getElementById(field.name).classList.add("none");
    }
    else{
        field.className = 'form-control invalid';
        if(document.getElementById(field.name)){
        document.getElementById(field.name).classList.remove("none");
        document.getElementById(field.name).classList.add("error");}
    }  
  }
  
  let keys = document.querySelectorAll('input');
  keys.forEach(item => item.addEventListener(
    'keyup', e => {
      if(inp_field[e.target.attributes.name.value])
      validate(e.target, inp_field[e.target.attributes.name.value])
    }
  ));