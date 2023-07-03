/******/ (function() { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./blocks/src/accordions-with-filter/assets/icon.svg":
/*!***********************************************************!*\
  !*** ./blocks/src/accordions-with-filter/assets/icon.svg ***!
  \***********************************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "ReactComponent": function() { return /* binding */ SvgIcon; }
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
var _path;
function _extends() { _extends = Object.assign ? Object.assign.bind() : function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; }; return _extends.apply(this, arguments); }

var SvgIcon = function SvgIcon(props) {
  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("svg", _extends({
    width: 18,
    height: 12,
    fill: "none",
    xmlns: "http://www.w3.org/2000/svg"
  }, props), _path || (_path = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("path", {
    d: "m1 1.333 7.24 8.448a1 1 0 0 0 1.52 0L17 1.333",
    stroke: "#007953",
    strokeWidth: 2,
    strokeLinecap: "round"
  })));
};

/* harmony default export */ __webpack_exports__["default"] = ("data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTgiIGhlaWdodD0iMTIiIHZpZXdCb3g9IjAgMCAxOCAxMiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTEgMS4zMzMwMUw4LjI0MDc0IDkuNzgwNTRDOC42Mzk4NCAxMC4yNDYyIDkuMzYwMTYgMTAuMjQ2MiA5Ljc1OTI2IDkuNzgwNTRMMTcgMS4zMzMwMSIgc3Ryb2tlPSIjMDA3OTUzIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIvPgo8L3N2Zz4K");

/***/ }),

/***/ "./blocks/src/accordions-with-filter/edit.js":
/*!***************************************************!*\
  !*** ./blocks/src/accordions-with-filter/edit.js ***!
  \***************************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": function() { return /* binding */ Edit; }
/* harmony export */ });
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/block-editor */ "@wordpress/block-editor");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__);




/**
 * @param {Object}   param0
 * @param {Object}   param0.attributes
 * @param {Function} param0.setAttributes
 * @return {WPElement}
 */

function Edit(_ref) {
  let {
    attributes,
    setAttributes
  } = _ref;
  const {
    title,
    accordions1,
    accordions2
  } = attributes;
  const setItemAttribute1 = (tab, attribute, value) => {
    setAttributes({
      accordions1: accordions1.map(accordion => {
        if (accordion.name === tab.name) {
          return {
            ...accordion,
            [attribute]: value
          };
        }
        return accordion;
      })
    });
  };
  const removeItem1 = tab => {
    setAttributes({
      accordions1: accordions1.filter(accordion => accordion.name !== tab.name)
    });
  };
  const addItem1 = name => {
    setAttributes({
      accordions1: [...accordions1, {
        name: name,
        title: 'New',
        image: '',
        content: '',
        iframe: ''
      }]
    });
  };
  const setItemAttribute2 = (tab, attribute, value) => {
    setAttributes({
      accordions2: accordions2.map(accordion => {
        if (accordion.name === tab.name) {
          return {
            ...accordion,
            [attribute]: value
          };
        }
        return accordion;
      })
    });
  };
  const removeItem2 = tab => {
    setAttributes({
      accordions2: accordions2.filter(accordion => accordion.name !== tab.name)
    });
  };
  const addItem2 = name => {
    setAttributes({
      accordions2: [...accordions2, {
        name: name,
        title: 'New',
        image: ''
      }]
    });
  };
  return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", (0,_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_1__.useBlockProps)(), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "accordions-with-filter-editor"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Placeholder, {
    label: 'Accordions With Filter'
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TabPanel, {
    tabs: accordions1
  }, tab => (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Placeholder, {
    className: 'placeholder'
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "row"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
    label: "Title",
    value: tab.title,
    className: "input",
    onChange: value => setItemAttribute1(tab, 'title', value)
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "row"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
    label: "Category",
    value: tab.category,
    className: "input",
    onChange: value => setItemAttribute1(tab, 'category', value)
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "row"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
    label: "Iframe",
    value: tab.iframe,
    className: "input",
    onChange: value => setItemAttribute1(tab, 'iframe', value)
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "row"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextareaControl, {
    label: "Content",
    value: tab.content,
    className: "input",
    onChange: value => setItemAttribute1(tab, 'content', value)
  })), accordions1.length > 1 && (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    variant: "primary",
    className: "primary-button",
    onClick: () => removeItem1(tab)
  }, "Delete"))), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    variant: "primary",
    className: "primary-button",
    onClick: () => addItem1(Math.random())
  }, "Add new"), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TabPanel, {
    tabs: accordions2
  }, tab => (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Placeholder, {
    className: 'placeholder'
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "row"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
    label: "Title",
    value: tab.title,
    className: "input",
    onChange: value => setItemAttribute2(tab, 'title', value)
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "row"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
    label: "Category",
    value: tab.category,
    className: "input",
    onChange: value => setItemAttribute2(tab, 'category', value)
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "row"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextareaControl, {
    label: "Iframe",
    value: tab.iframe,
    className: "input",
    onChange: value => setItemAttribute2(tab, 'iframe', value)
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextareaControl, {
    label: "Content",
    value: tab.content,
    className: "input",
    onChange: value => setItemAttribute2(tab, 'content', value)
  })), accordions2.length > 1 && (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    variant: "primary",
    className: "primary-button",
    onClick: () => removeItem2(tab)
  }, "Delete"))), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    variant: "primary",
    className: "primary-button",
    onClick: () => addItem2(Math.random())
  }, "Add new"))));
}

/***/ }),

/***/ "./blocks/src/accordions-with-filter/index.js":
/*!****************************************************!*\
  !*** ./blocks/src/accordions-with-filter/index.js ***!
  \****************************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/blocks */ "@wordpress/blocks");
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _style_scss__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./style.scss */ "./blocks/src/accordions-with-filter/style.scss");
/* harmony import */ var _block_json__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./block.json */ "./blocks/src/accordions-with-filter/block.json");
/* harmony import */ var _edit__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./edit */ "./blocks/src/accordions-with-filter/edit.js");
/* harmony import */ var _save__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./save */ "./blocks/src/accordions-with-filter/save.js");





const {
  name
} = _block_json__WEBPACK_IMPORTED_MODULE_2__;
(0,_wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__.registerBlockType)(name, {
  edit: _edit__WEBPACK_IMPORTED_MODULE_3__["default"],
  save: _save__WEBPACK_IMPORTED_MODULE_4__["default"]
});

/***/ }),

/***/ "./blocks/src/accordions-with-filter/save.js":
/*!***************************************************!*\
  !*** ./blocks/src/accordions-with-filter/save.js ***!
  \***************************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": function() { return /* binding */ save; }
/* harmony export */ });
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/block-editor */ "@wordpress/block-editor");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _assets_icon_svg__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./assets/icon.svg */ "./blocks/src/accordions-with-filter/assets/icon.svg");



function save(_ref) {
  let {
    attributes
  } = _ref;
  const {
    accordions1,
    accordions2
  } = attributes;
  return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("section", _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_1__.useBlockProps.save(), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "accordions-with-filter"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "container"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("h2", {
    className: "accordions-with-filter__title hidden"
  }, "FAQ"), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "accordions-with-filter__inner"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "accordions-with-filter__left"
  }, accordions1.map(accordion => (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: `accordions-with-filter__item accordion-with-filter accordion`,
    "data-category": accordion.category
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "accordion-with-filter__header accordion__triger"
  }, accordion.title && (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("h3", {
    className: "accordion-with-filter__title"
  }, accordion.title), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "accordion-with-filter__icon accordion__icon"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
    src: _assets_icon_svg__WEBPACK_IMPORTED_MODULE_2__["default"],
    alt: 'icon'
  }))), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "accordion-with-filter__body accordion__content"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "accordion-with-filter__body-inner"
  }, accordion.iframe && (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("iframe", {
    className: "accordion-with-filter__iframe",
    src: accordion.iframe
  }), accordion.content && (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "accordion-with-filter__content",
    dangerouslySetInnerHTML: {
      __html: accordion.content
    }
  })))))), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "accordions-with-filter__right"
  }, accordions2.map(accordion => (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "accordions-with-filter__item accordion-with-filter accordion",
    "data-category": accordion.category
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "accordion-with-filter__header accordion__triger"
  }, accordion.title && (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("h3", {
    className: "accordion-with-filter__title"
  }, accordion.title), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "accordion-with-filter__icon accordion__icon"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
    src: _assets_icon_svg__WEBPACK_IMPORTED_MODULE_2__["default"],
    alt: 'icon'
  }))), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "accordion-with-filter__body accordion__content"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "accordion-with-filter__body-inner"
  }, accordion.iframe && (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("iframe", {
    className: "accordion-with-filter__iframe",
    src: accordion.iframe
  }), accordion.content && (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "accordion-with-filter__content",
    dangerouslySetInnerHTML: {
      __html: accordion.content
    }
  }))))))))));
}

/***/ }),

/***/ "./blocks/src/accordions-with-filter/style.scss":
/*!******************************************************!*\
  !*** ./blocks/src/accordions-with-filter/style.scss ***!
  \******************************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "react":
/*!************************!*\
  !*** external "React" ***!
  \************************/
/***/ (function(module) {

module.exports = window["React"];

/***/ }),

/***/ "@wordpress/block-editor":
/*!*************************************!*\
  !*** external ["wp","blockEditor"] ***!
  \*************************************/
/***/ (function(module) {

module.exports = window["wp"]["blockEditor"];

/***/ }),

/***/ "@wordpress/blocks":
/*!********************************!*\
  !*** external ["wp","blocks"] ***!
  \********************************/
/***/ (function(module) {

module.exports = window["wp"]["blocks"];

/***/ }),

/***/ "@wordpress/components":
/*!************************************!*\
  !*** external ["wp","components"] ***!
  \************************************/
/***/ (function(module) {

module.exports = window["wp"]["components"];

/***/ }),

/***/ "@wordpress/element":
/*!*********************************!*\
  !*** external ["wp","element"] ***!
  \*********************************/
/***/ (function(module) {

module.exports = window["wp"]["element"];

/***/ }),

/***/ "./blocks/src/accordions-with-filter/block.json":
/*!******************************************************!*\
  !*** ./blocks/src/accordions-with-filter/block.json ***!
  \******************************************************/
/***/ (function(module) {

module.exports = JSON.parse('{"$schema":"https://schemas.wp.org/trunk/block.json","apiVersion":2,"name":"banescocontigo/accordions-with-filter","version":"1.0.0","title":"Accordions With Filter","category":"widgets","icon":"warning","supports":{"html":false},"textdomain":"blocks","editorScript":"file:../../../blocks/build/accordions-with-filter.js","editorStyle":"file:../../../blocks/build/accordions-with-filter.css","style":"file:../../../blocks/build/style-accordions-with-filter.css","attributes":{"accordions1":{"type":"array","default":[{"name":"tab1","title":"¿Cómo puedo afiliarme a BanescOnline?","category":"Cuentas","content":"Afiliarte a BanescoOnline es muy sencillo, solo debes ingresar a Banca por Internet desde la página de Banesco y seleccionar la opción “Afíliate Aquí”. Una vez dentro de la opción, debes colocar tus datos personales, los datos de algún producto que mantengas con Banesco y seguir los pasos que te presentamos."},{"name":"tab2","title":"¿Qué es Tus Datos Banesco?","category":"Préstamos","content":"Afiliarte a BanescoOnline es muy sencillo, solo debes ingresar a Banca por Internet desde la página de Banesco y seleccionar la opción “Afíliate Aquí”. Una vez dentro de la opción, debes colocar tus datos personales, los datos de algún producto que mantengas con Banesco y seguir los pasos que te presentamos."},{"name":"tab3","title":"¿Dónde puedo visualizar mi estado de cuenta?","category":"Tarjetas","content":"Afiliarte a BanescoOnline es muy sencillo, solo debes ingresar a Banca por Internet desde la página de Banesco y seleccionar la opción “Afíliate Aquí”. Una vez dentro de la opción, debes colocar tus datos personales, los datos de algún producto que mantengas con Banesco y seguir los pasos que te presentamos."},{"name":"tab4","title":"¿Por qué cae en inactividad mi cuenta y qué debo hacer para reactivarla?","category":"BanescOnline","content":"Afiliarte a BanescoOnline es muy sencillo, solo debes ingresar a Banca por Internet desde la página de Banesco y seleccionar la opción “Afíliate Aquí”. Una vez dentro de la opción, debes colocar tus datos personales, los datos de algún producto que mantengas con Banesco y seguir los pasos que te presentamos."},{"name":"tab5","title":"Guía para seguimiento de transferencias internacionales","category":"Seguros","content":"Afiliarte a BanescoOnline es muy sencillo, solo debes ingresar a Banca por Internet desde la página de Banesco y seleccionar la opción “Afíliate Aquí”. Una vez dentro de la opción, debes colocar tus datos personales, los datos de algún producto que mantengas con Banesco y seguir los pasos que te presentamos."},{"name":"tab6","title":"¿Cuánto tiempo demora una transferencia internacional?","category":"Cambio de moneda","content":"Afiliarte a BanescoOnline es muy sencillo, solo debes ingresar a Banca por Internet desde la página de Banesco y seleccionar la opción “Afíliate Aquí”. Una vez dentro de la opción, debes colocar tus datos personales, los datos de algún producto que mantengas con Banesco y seguir los pasos que te presentamos."},{"name":"tab7","title":"¿Qué transacciones puedo realizar a través de BanescOnline?","category":"Otros temas","content":"Afiliarte a BanescoOnline es muy sencillo, solo debes ingresar a Banca por Internet desde la página de Banesco y seleccionar la opción “Afíliate Aquí”. Una vez dentro de la opción, debes colocar tus datos personales, los datos de algún producto que mantengas con Banesco y seguir los pasos que te presentamos."},{"name":"tab8","title":"¿Que es MóvilPay de Banesco?","category":"Información de seguridad general","content":"Afiliarte a BanescoOnline es muy sencillo, solo debes ingresar a Banca por Internet desde la página de Banesco y seleccionar la opción “Afíliate Aquí”. Una vez dentro de la opción, debes colocar tus datos personales, los datos de algún producto que mantengas con Banesco y seguir los pasos que te presentamos."},{"name":"tab9","title":"¿Es necesario tener una cuenta bancaria con Banesco para tener MóvilPay?","category":"Transferencias","content":"Afiliarte a BanescoOnline es muy sencillo, solo debes ingresar a Banca por Internet desde la página de Banesco y seleccionar la opción “Afíliate Aquí”. Una vez dentro de la opción, debes colocar tus datos personales, los datos de algún producto que mantengas con Banesco y seguir los pasos que te presentamos."}]},"accordions2":{"type":"array","default":[{"name":"tab1","title":"¿Cómo accedo a BanescOnline?","category":"Otros temas","content":"Afiliarte a BanescoOnline es muy sencillo, solo debes ingresar a Banca por Internet desde la página de Banesco y seleccionar la opción “Afíliate Aquí”. Una vez dentro de la opción, debes colocar tus datos personales, los datos de algún producto que mantengas con Banesco y seguir los pasos que te presentamos."},{"name":"tab2","title":"Mi cuenta está en saldo mínimo, ¿qué debo saber sobre esto?","category":"BanescOnline","content":"Afiliarte a BanescoOnline es muy sencillo, solo debes ingresar a Banca por Internet desde la página de Banesco y seleccionar la opción “Afíliate Aquí”. Una vez dentro de la opción, debes colocar tus datos personales, los datos de algún producto que mantengas con Banesco y seguir los pasos que te presentamos."},{"name":"tab3","title":"¿Cómo puedo redimir mis puntos?","category":"Transferencias","content":"Afiliarte a BanescoOnline es muy sencillo, solo debes ingresar a Banca por Internet desde la página de Banesco y seleccionar la opción “Afíliate Aquí”. Una vez dentro de la opción, debes colocar tus datos personales, los datos de algún producto que mantengas con Banesco y seguir los pasos que te presentamos."},{"name":"tab4","title":"¿Cuándo es mi fecha tope de pago?","category":"Cuentas","content":"Afiliarte a BanescoOnline es muy sencillo, solo debes ingresar a Banca por Internet desde la página de Banesco y seleccionar la opción “Afíliate Aquí”. Una vez dentro de la opción, debes colocar tus datos personales, los datos de algún producto que mantengas con Banesco y seguir los pasos que te presentamos."},{"name":"tab5","title":"¿Cómo funciona el horario para realizar una transferencia a otros bancos locales (ACH)?","category":"Tarjetas","content":"Afiliarte a BanescoOnline es muy sencillo, solo debes ingresar a Banca por Internet desde la página de Banesco y seleccionar la opción “Afíliate Aquí”. Una vez dentro de la opción, debes colocar tus datos personales, los datos de algún producto que mantengas con Banesco y seguir los pasos que te presentamos."},{"name":"tab6","title":"¿Cómo hacer una transferencia internacional?","category":"Cambio de moneda","content":"Afiliarte a BanescoOnline es muy sencillo, solo debes ingresar a Banca por Internet desde la página de Banesco y seleccionar la opción “Afíliate Aquí”. Una vez dentro de la opción, debes colocar tus datos personales, los datos de algún producto que mantengas con Banesco y seguir los pasos que te presentamos."},{"name":"tab7","title":"¿Banesco tiene un código SWIFT (BIC) o IBAN?","category":"Cambio de moneda","content":"Afiliarte a BanescoOnline es muy sencillo, solo debes ingresar a Banca por Internet desde la página de Banesco y seleccionar la opción “Afíliate Aquí”. Una vez dentro de la opción, debes colocar tus datos personales, los datos de algún producto que mantengas con Banesco y seguir los pasos que te presentamos."},{"name":"tab8","title":"Recuperar o desbloquear preguntas de seguridad","category":"Tarjetas","content":"Afiliarte a BanescoOnline es muy sencillo, solo debes ingresar a Banca por Internet desde la página de Banesco y seleccionar la opción “Afíliate Aquí”. Una vez dentro de la opción, debes colocar tus datos personales, los datos de algún producto que mantengas con Banesco y seguir los pasos que te presentamos."},{"name":"tab9","title":"¿Cuáles son los requisitos para solicitar MóvilPay?","category":"Cuentas","content":"Afiliarte a BanescoOnline es muy sencillo, solo debes ingresar a Banca por Internet desde la página de Banesco y seleccionar la opción “Afíliate Aquí”. Una vez dentro de la opción, debes colocar tus datos personales, los datos de algún producto que mantengas con Banesco y seguir los pasos que te presentamos."}]}}}');

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	!function() {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = function(result, chunkIds, fn, priority) {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var chunkIds = deferred[i][0];
/******/ 				var fn = deferred[i][1];
/******/ 				var priority = deferred[i][2];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every(function(key) { return __webpack_require__.O[key](chunkIds[j]); })) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	!function() {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = function(module) {
/******/ 			var getter = module && module.__esModule ?
/******/ 				function() { return module['default']; } :
/******/ 				function() { return module; };
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	!function() {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = function(exports, definition) {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	!function() {
/******/ 		__webpack_require__.o = function(obj, prop) { return Object.prototype.hasOwnProperty.call(obj, prop); }
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	!function() {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = function(exports) {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	!function() {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"accordions-with-filter": 0,
/******/ 			"./style-accordions-with-filter": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = function(chunkId) { return installedChunks[chunkId] === 0; };
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = function(parentChunkLoadingFunction, data) {
/******/ 			var chunkIds = data[0];
/******/ 			var moreModules = data[1];
/******/ 			var runtime = data[2];
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some(function(id) { return installedChunks[id] !== 0; })) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunkbanescocontigo"] = self["webpackChunkbanescocontigo"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	}();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["./style-accordions-with-filter"], function() { return __webpack_require__("./blocks/src/accordions-with-filter/index.js"); })
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;
//# sourceMappingURL=accordions-with-filter.js.map