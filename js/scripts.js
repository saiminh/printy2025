// ------------------------------------------------------------------------
// This is the original scripts.js file from the theme, it is not loaded on 
// the site, we load the minimized version of this file instead
// ------------------------------------------------------------------------

const fixednav = document.querySelector('.fixednav');
let lastScrollTop = 0;

// Scrollhandler to deal with the fixednav
const handleScroll = () => {
  let scrollTop = window.scrollY || document.documentElement.scrollTop;
  if (Math.abs(scrollTop - lastScrollTop) >= 50) {
    if (scrollTop > lastScrollTop) {
      fixednav.classList.add('scroll_hidden');
      fixednav.classList.add('scrolledbefore');
    } else {
      fixednav.classList.remove('scroll_hidden');
    }
    lastScrollTop = scrollTop;
  }
};

window.addEventListener('scroll', handleScroll);

// Check Language
const isGerman = () => { return window.location.href.includes('/de/') };

document.addEventListener('DOMContentLoaded', () => {
  
  // Check if ccs is on the page, if not abort
  const ccb = document.querySelector('[class*="ccb"]')
  if(!ccb) return;

  function convertToNumberField(input) {
    if (input.getAttribute('type') === 'number') return;
    input.setAttribute('type', 'number');
  }

  function convertQuantityFields() {
    const quantityFields = document.querySelectorAll('input[name="quantityField"]');
    quantityFields.forEach(field => {
      convertToNumberField(field);
    });
  }

  // function to create mailto link of the order button
  function createMailtoLinkFor(link) {
    // check if the calc-subtotal-list-accordion is on the page, if not alert the user and abort
    if (!document.querySelector('.calc-subtotal-list-accordion')) {
      const germanMessage = 'Es ist etwas schiefgelaufen, bitte kopieren Sie die Preiskalkulation und senden Sie uns eine E-Mail an online@printy.de';
      const englishMessage = 'Something went wrong, please manually copy the price calculation and send us an email to online@printy.de';
      const message = isGerman() ? germanMessage : englishMessage;
      alert( message );
      return;
    }
    // get the items of the calc-subtotal-list-accordion and create a mailto link
    let calcSubtotalContent = '';
    // get headline
    const header = document.querySelector('.ccb-calc-heading').innerHTML.replace(/<[^>]*>/g, '');
    calcSubtotalContent += `${header}%0A`;
    // get items
    const items = document.querySelectorAll('.calc-subtotal-list-accordion .sub-list-item');
    items.forEach(item => {
      const itemContent = item.innerHTML.replace(/<[^>]*>/g, '');
      calcSubtotalContent += `${itemContent}%0A`;
    });
    // get price
    const price = document.querySelector('.calc-subtotal-list.totals').innerHTML.replace(/<[^>]*>/g, '') ;
    calcSubtotalContent += `${price}%0A`;
    link.href = `mailto:online@printy.de?subject=Anfrage%20printy.de%20Preisrechner&body=${calcSubtotalContent}`;
  }

  // function to create order button
  function createOrderButton() {
    const orderButton = document.createElement('a');
    orderButton.textContent = isGerman() ? 'Anfragen' : 'Request order';
    orderButton.classList.add('wp-block-button__link', 'has-accent-1-background-color', 'has-text-color', 'has-background', 'has-link-color', 'wp-element-button');
    orderButton.style.textAlign = 'center';
    orderButton.style.marginTop = '1rem';
    orderButton.style.borderRadius = '.5rem';
    orderButton.style.padding = '.667em 1.33em';
    const calcSubtotal = document.querySelector('.calc-subtotal');
    calcSubtotal.appendChild(orderButton);
    orderButton.addEventListener('click', () => {
      createMailtoLinkFor(orderButton);
    });
  }

  // check if ccb is loaded, if not check every 200ms, if yes create and add the order button
  const checkCcbLoaded = setInterval(() => {
    if (window.ccbLoaded) {
    clearInterval(checkCcbLoaded);
    convertQuantityFields()
    createOrderButton();
    }
  }, 200);

  checkCcbLoaded;

  
  
});

const searchButton = document.querySelector('a[href="#search"]');  
const searchInput = document.querySelector('#search input[type="search"]');

searchButton.addEventListener('click', (e) => {
  e.preventDefault();
  console.log('search button clicked');
  searchInput.focus();
});