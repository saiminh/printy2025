// ------------------------------------------------------------------------
// This is the original scripts.js file from the theme, it is not loaded on 
// the site, we load the minimized version of this file instead
// This file is minimized and modified by just using VSCode 'minify' command
// ------------------------------------------------------------------------

const fixednav = document.querySelector('.fixednav');
let lastScrollTop = 0;

// ------------------------------------------------------------------------
// Scrollhandler to deal with the fixednav
// ------------------------------------------------------------------------
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
  if(!ccb) {
    console.log('Die Preiskalkulation ist nicht verfügbar. Bitte versuchen Sie es später erneut.');
    return;
  } else {
    console.log('Die Preiskalkulation ist verfügbar.'); // for testing purposes
  }

  // utility function to convert input fields with type text to number
  function convertToNumberField(input) {
    if (input.getAttribute('type') === 'number') return;
    input.setAttribute('type', 'number');
  }

  // utility function to convert all quantity fields to number fields
  function convertQuantityFields() {
    const quantityFields = document.querySelectorAll('.ccb-summary-item__value');
    quantityFields.forEach(field => {
      convertToNumberField(field);
    });
  }

  // utility function to decode HTML entities
  function decodeHtmlEntities(str) {
    const txt = document.createElement('textarea');
    txt.innerHTML = str;
    return txt.value;
  }

  // utility function to create mailto link of the order button
  function createMailtoLinkFor(link) {
    // check if the calc-subtotal-list-accordion is on the page, if not alert the user and abort
    if (!document.querySelector('.ccb-subtotal-wrapper')) {
      console.log('ccb-subtotal-wrapper not found'); // for testing purposes
      const germanMessage = 'Es ist etwas schiefgelaufen, bitte kopieren Sie die Preiskalkulation und senden Sie uns eine E-Mail an online@printy.de';
      const englishMessage = 'Something went wrong, please manually copy the price calculation and send us an email to online@printy.de';
      const message = isGerman() ? germanMessage : englishMessage;
      alert( message );
      return;
    }
    
    // let variable to hold the content of the mailto link
    let calcSubtotalContent = '';

    // fetch calculator elements
    const header = document.querySelector('.ccb-header-title').textContent.trim();
    const items = document.querySelectorAll('.ccb-subtotal-wrapper .ccb-summary-list__body .ccb-summary-item');
    const totals = document.querySelector('.ccb-totals-list');
    const totalsRows = totals.querySelectorAll('.ccb-total-row__item');

    // check if calculator elements are available, if not alert the user and abort
    if (!header || items.length === 0 || totalsRows.length === 0) {
      console.log('Calculator elements not found'); // for testing purposes
      return;
    }
    
    // get headline
    calcSubtotalContent += `${header}\n---\n\n`;
    
    // get items
    items.forEach(item => {
      const itemTitle = item.querySelector('.ccb-summary-item__title .ccb-summary-title').textContent.trim();
      const itemValue = item.querySelector('.ccb-summary-item__value').textContent.trim();
      const itemContent = `${itemTitle}: ${itemValue}`;
      calcSubtotalContent += `${itemContent}\n`;
    });
    
    // get totals
    let totalsText = '';
    totalsRows.forEach(row => {
      const rowTitle = row.querySelector('.ccb-total-row__name').textContent.trim();
      const rowValue = row.querySelector('.ccb-total-row__value').textContent.trim();
      totalsText += `${rowTitle}: ${rowValue}\n`;
    });
    calcSubtotalContent += `---\n${totalsText}\n`;

    // get the mailto link
    link.href = `mailto:online@printy.de?subject=Anfrage%20printy.de%20Preisrechner&body=${encodeURIComponent(calcSubtotalContent)}`;
  }

  // function to create order button
  function createOrderButton() {
    const orderButtonContainer = document.createElement('div');
    orderButtonContainer.classList.add('wp-block-group', 'is-layout-flex');
    const orderButton = document.createElement('a');
    orderButton.textContent = isGerman() ? 'Anfragen' : 'Request order';
    orderButton.classList.add('wp-block-button__link', 'has-accent-1-background-color', 'has-text-color', 'has-background', 'has-link-color', 'wp-element-button');
    orderButton.style.textAlign = 'center';
    orderButton.style.marginTop = '1rem';
    orderButton.style.borderRadius = '.5rem';
    orderButton.style.padding = '.667em 1.33em';
    const calcSubtotal = document.querySelector('.ccb-subtotals-block');
    if (!calcSubtotal) {
      console.log('calcSubtotal not found, aborting order button creation'); // for testing purposes
      return;
    }
    calcSubtotal.appendChild(orderButtonContainer);
    orderButtonContainer.appendChild(orderButton);
    orderButton.addEventListener('click', () => {
      createMailtoLinkFor(orderButton);
    });
  }

  // check if ccb is loaded, if not check every 200ms, if yes create and add the order button
  const checkCcbLoaded = setInterval(() => {
    if (document.querySelector('.ccb-app-container') && document.querySelector('.ccb-subtotals-block')) {
      console.log('ccbLoaded is true, creating order button'); // for testing purposes
    clearInterval(checkCcbLoaded);
    convertQuantityFields()
    createOrderButton();
    }
    else {
      console.log('ccbLoaded is false, checking again in 200ms'); // for testing purposes
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