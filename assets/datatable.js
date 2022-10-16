const jquery = require('jquery');
require('datatables.net');
require('datatables.net-bs');

import {forEach} from "lodash";

forEach(document.querySelectorAll('.ems-datatable'), function (element) {
   jquery(element).DataTable();
});

