(async function(){

  const postcodeForms = document.querySelectorAll('.postcode');
  postcodeForms.forEach(postcodeForm => {
      postcodeForm.addEventListener('submit', (event) => {
        event.preventDefault();
        validatePostcode(postcodeForm);
      })
  })
  const redirectOnFound = true;
  

  let formData = new FormData();

  formData.append('action', 'postcodes')


  const sheetFields = await fetch(adminUrl, {
      method: 'POST',
      body: formData,
  })
      .then((response) => {
        return response.json();
      })
      .then((data) => {
        return data;
  })

  
  const postcodes = sheetFields.values[0];


  // main function
  function validatePostcode(postcodeForm) {
    const inputfield = postcodeForm.querySelector(".postcode-check-input");
    const postcode = inputfield.value;

    // basic regex for an Edinburgh postcode
    // const regex = /^[A-Z]{1,2}[0-9]{1,2} ?[0-9][A-Z]{2}$/i;
    // if (!regex.test(postcode)) {
    //   console.log('regex failed');
    //   return false;
    // }
    // valid postcode so split into two parts
    let stringArray = postcode.split(" ");
    // get first and seconds parts
    let firstword = stringArray[0];
    let secondword = stringArray[1];
    // and then just first char of second word
    let firstchar = false;

    if(secondword != undefined) {
      firstchar = secondword.charAt(0);

    }
    let lookingfor = firstword;

    if(firstchar != false) {
      lookingfor = firstword + " " + firstchar;
    }

    console.log(lookingfor)
    // check input postcode is in array of good postcodes
    if (postcodes.indexOf(lookingfor) > -1) {
      // yes it is so carry on
      if(redirectOnFound){
        window.location.href = postCodeFoundRedirectUrl
        return false;
      }
    } else {
      // no it isn't so show other option
      window.location.href = noPostCodeFoundRedirectUrl;
      return false;
    }
  }
})();