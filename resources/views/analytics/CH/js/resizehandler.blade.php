  function resizeHandler () {
      u5Register.draw(u5Registerdata, options);
      chsec4antibiotics2.draw(chsec4antibiotics2data,options);
       chsec4diarhoea.draw(chsec4diarhoeadata, options);
        chsec4diarhoea2.draw(chsec4diarhoeadata2, options);
        chsec4antibiotics.draw(chsec4antibioticsdata, options);
        chsec4malaria.draw(chsec4malariadata, options);
          chsec4malaria2.draw(chsec4malariadata2, options);
          gjavailability.draw(gjavailabilitydata, options);
            supplies.draw(suppliesdata, options);
    tavailability.draw(tavailabilitydata, options);
     ort_func.draw(ort_funcdata, options);
       resources.draw(resourcesdata, options);
          //chhealthservices.draw(chhealthservicesdata, options);
          
          //  ownership.draw(ownershipdata, options);
        
          //staff_Trained.draw(staff_Traineddata, options);
  
    //ftypes.draw(ftypesdata, options);
    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizeHandler, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizeHandler);
    }