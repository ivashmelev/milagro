'use strict'

import { openMenu } from './menu.js';
import { popup } from './popup.js';
import { order } from './order.js';
import { productPopup } from './productPopup.js';
import { search } from './search.js';



(async () => {
  openMenu();
  popup();
  order();
  productPopup();
  search();
})();