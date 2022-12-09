/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/admin/js/edit-tor.js":
/*!***********************************************!*\
  !*** ./resources/assets/admin/js/edit-tor.js ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

var option_editor = {
  toolbar: {
    items: ['bold', 'italic', 'underline', 'strikethrough', 'removeFormat', '|', 'fontSize', 'fontFamily', 'fontBackgroundColor', 'fontColor', '|', 'link']
  },
  language: 'vi',
  blockToolbar: ['heading', '|', 'numberedList', 'bulletedList', '|', 'indent', 'outdent', 'alignment', // 'fontBackgroundColor',
  // 'fontColor',
  '|', 'CKFinder', // 'imageUpload',
  'blockQuote', 'insertTable', 'htmlEmbed', 'codeBlock', '|', 'horizontalLine', 'pageBreak' // 'mediaEmbed',
  // '|',
  // 'specialCharacters',
  // '|',
  // 'undo',
  // 'redo'
  ],
  image: {
    toolbar: ['imageTextAlternative', 'imageStyle:inline', 'imageStyle:block', 'imageStyle:side', 'linkImage', 'toggleImageCaption']
  },
  table: {
    contentToolbar: ['tableColumn', 'tableRow', 'mergeTableCells', 'tableCellProperties', 'tableProperties']
  },
  autosave: {
    save: function save(editor) {
      window.editor = editor.getData(); // return saveData( editor.getData() );
    }
  },
  licenseKey: '',
  ckfinder: {
    uploadUrl: '/ckfinder/connector?command=QuickUpload&type=Images&responseType=json'
  },
  heading: {
    options: [{
      model: 'paragraph',
      title: 'Paragraph',
      "class": 'ck-heading_paragraph'
    }, //                    { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
    {
      model: 'heading2',
      view: 'h2',
      title: 'Heading 2',
      "class": 'ck-heading_heading2'
    }, {
      model: 'heading3',
      view: 'h3',
      title: 'Heading 3',
      "class": 'ck-heading_heading3'
    }, {
      model: 'heading4',
      view: 'h4',
      title: 'Heading 4',
      "class": 'ck-heading_heading4'
    } // { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
    // { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
    ]
  },
  placeholder: 'Tạo nội dung website'
};
var watchdog = new CKSource.EditorWatchdog();
window.watchdog = watchdog;
var editors = {};
watchdog.setCreator(function (element, config) {
  return CKSource.Editor.create(element, config).then(function (editor) {
    editors[element.id] = editor;
  });
});
watchdog.setDestructor(function (editor) {
  return editor.destroy();
});
watchdog.on('error', handleError);

function handleError(error) {// console.log( error );
}

watchdog.create(document.querySelector('#textareaContent'), option_editor)["catch"](handleError);

window.pushData = function (id) {
  var content = typeof editor != "undefined" ? editor : '';

  var _token = $('meta[name="csrf-token"]').attr('content');

  $.ajax({
    url: "/admin/category/".concat(id, "/config/change"),
    method: 'post',
    data: {
      content: content,
      background: $("input[name='background']").val(),
      _token: _token
    }
  }).done(function (res) {
    location.replace(res.link);
  });
};

/***/ }),

/***/ 1:
/*!*****************************************************!*\
  !*** multi ./resources/assets/admin/js/edit-tor.js ***!
  \*****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\xampp\htdocs\yuki\yuki8x\resources\assets\admin\js\edit-tor.js */"./resources/assets/admin/js/edit-tor.js");


/***/ })

/******/ });