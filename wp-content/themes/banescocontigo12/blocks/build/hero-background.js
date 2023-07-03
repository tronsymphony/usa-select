/******/ (function() { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./blocks/src/hero-background/edit.js":
/*!********************************************!*\
  !*** ./blocks/src/hero-background/edit.js ***!
  \********************************************/
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
/* harmony import */ var _assets_background_0_jpg__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./assets/background-0.jpg */ "./blocks/src/hero-background/assets/background-0.jpg");
/* harmony import */ var _assets_background_0_mobile_jpg__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./assets/background-0-mobile.jpg */ "./blocks/src/hero-background/assets/background-0-mobile.jpg");
/* harmony import */ var _assets_background_1_jpg__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./assets/background-1.jpg */ "./blocks/src/hero-background/assets/background-1.jpg");
/* harmony import */ var _assets_background_1_mobile_jpg__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./assets/background-1-mobile.jpg */ "./blocks/src/hero-background/assets/background-1-mobile.jpg");
/* harmony import */ var _assets_background_2_jpg__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./assets/background-2.jpg */ "./blocks/src/hero-background/assets/background-2.jpg");
/* harmony import */ var _assets_background_2_mobile_jpg__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./assets/background-2-mobile.jpg */ "./blocks/src/hero-background/assets/background-2-mobile.jpg");
/* harmony import */ var _assets_background_3_jpg__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ./assets/background-3.jpg */ "./blocks/src/hero-background/assets/background-3.jpg");
/* harmony import */ var _assets_background_3_mobile_jpg__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ./assets/background-3-mobile.jpg */ "./blocks/src/hero-background/assets/background-3-mobile.jpg");
/* harmony import */ var _assets_background_4_jpg__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! ./assets/background-4.jpg */ "./blocks/src/hero-background/assets/background-4.jpg");
/* harmony import */ var _assets_background_4_mobile_jpg__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! ./assets/background-4-mobile.jpg */ "./blocks/src/hero-background/assets/background-4-mobile.jpg");
/* harmony import */ var _assets_background_5_jpg__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! ./assets/background-5.jpg */ "./blocks/src/hero-background/assets/background-5.jpg");
/* harmony import */ var _assets_background_5_mobile_jpg__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! ./assets/background-5-mobile.jpg */ "./blocks/src/hero-background/assets/background-5-mobile.jpg");
/* harmony import */ var _assets_background_6_jpg__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! ./assets/background-6.jpg */ "./blocks/src/hero-background/assets/background-6.jpg");
/* harmony import */ var _assets_background_6_mobile_jpg__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! ./assets/background-6-mobile.jpg */ "./blocks/src/hero-background/assets/background-6-mobile.jpg");
/* harmony import */ var _assets_background_7_jpg__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! ./assets/background-7.jpg */ "./blocks/src/hero-background/assets/background-7.jpg");
/* harmony import */ var _assets_background_7_mobile_jpg__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! ./assets/background-7-mobile.jpg */ "./blocks/src/hero-background/assets/background-7-mobile.jpg");
/* harmony import */ var _assets_background_8_jpg__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(/*! ./assets/background-8.jpg */ "./blocks/src/hero-background/assets/background-8.jpg");
/* harmony import */ var _assets_background_8_mobile_jpg__WEBPACK_IMPORTED_MODULE_20__ = __webpack_require__(/*! ./assets/background-8-mobile.jpg */ "./blocks/src/hero-background/assets/background-8-mobile.jpg");
/* harmony import */ var _assets_background_9_jpg__WEBPACK_IMPORTED_MODULE_21__ = __webpack_require__(/*! ./assets/background-9.jpg */ "./blocks/src/hero-background/assets/background-9.jpg");
/* harmony import */ var _assets_background_9_mobile_jpg__WEBPACK_IMPORTED_MODULE_22__ = __webpack_require__(/*! ./assets/background-9-mobile.jpg */ "./blocks/src/hero-background/assets/background-9-mobile.jpg");
/* harmony import */ var _assets_background_10_jpg__WEBPACK_IMPORTED_MODULE_23__ = __webpack_require__(/*! ./assets/background-10.jpg */ "./blocks/src/hero-background/assets/background-10.jpg");
/* harmony import */ var _assets_background_10_mobile_jpg__WEBPACK_IMPORTED_MODULE_24__ = __webpack_require__(/*! ./assets/background-10-mobile.jpg */ "./blocks/src/hero-background/assets/background-10-mobile.jpg");


























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
    paddings,
    margins,
    gradient,
    colors,
    widths,
    title,
    description,
    button,
    background,
    bigText
  } = attributes;
  return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", (0,_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_1__.useBlockProps)(), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Placeholder, {
    label: 'Hero'
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_1__.InspectorAdvancedControls, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "paddings"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Flex, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.FlexBlock, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
    label: "padding top",
    value: paddings.desktop.top,
    className: "input",
    onChange: value => {
      const newPaddings = {
        ...paddings
      };
      newPaddings.desktop.top = value;
      setAttributes({
        paddings: newPaddings
      });
    }
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.FlexBlock, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
    label: "for mobile",
    value: paddings.mobile.top,
    className: "input",
    onChange: value => {
      const newPaddings = {
        ...paddings
      };
      newPaddings.mobile.top = value;
      setAttributes({
        paddings: newPaddings
      });
    }
  }))), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Flex, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.FlexBlock, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
    label: "padding bottom",
    value: paddings.desktop.bottom,
    className: "input",
    onChange: value => {
      const newPaddings = {
        ...paddings
      };
      newPaddings.desktop.bottom = value;
      setAttributes({
        paddings: newPaddings
      });
    }
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.FlexBlock, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
    label: "for mobile",
    value: paddings.mobile.bottom,
    className: "input",
    onChange: value => {
      const newPaddings = {
        ...paddings
      };
      newPaddings.mobile.bottom = value;
      setAttributes({
        paddings: newPaddings
      });
    }
  })))), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "margins"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Flex, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.FlexBlock, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
    label: "margin top",
    value: margins.desktop.top,
    className: "input",
    onChange: value => {
      const newMargins = {
        ...margins
      };
      newMargins.desktop.top = value;
      setAttributes({
        margins: newMargins
      });
    }
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.FlexBlock, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
    label: "for mobile",
    value: margins.mobile.top,
    className: "input",
    onChange: value => {
      const newMargins = {
        ...margins
      };
      newMargins.mobile.top = value;
      setAttributes({
        margins: newMargins
      });
    }
  }))), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Flex, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.FlexBlock, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
    label: "margin bottom",
    value: margins.desktop.bottom,
    className: "input",
    onChange: value => {
      const newMargins = {
        ...margins
      };
      newMargins.desktop.bottom = value;
      setAttributes({
        margins: newMargins
      });
    }
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.FlexBlock, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
    label: "for mobile",
    value: margins.mobile.bottom,
    className: "input",
    onChange: value => {
      const newMargins = {
        ...margins
      };
      newMargins.mobile.bottom = value;
      setAttributes({
        margins: newMargins
      });
    }
  })))), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "background"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Flex, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.FlexBlock, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
    label: "Default background",
    value: gradient,
    className: "input",
    onChange: value => setAttributes({
      gradient: value
    })
  }))))), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "settings"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "block"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "row"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
    label: "Title",
    value: title.desktop,
    className: "input",
    onChange: value => {
      const newValue = {
        ...title
      };
      newValue.desktop = value;
      setAttributes({
        title: newValue
      });
    }
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
    label: "Mobile (optional)",
    value: title.mobile,
    className: "input",
    onChange: value => {
      const newValue = {
        ...title
      };
      newValue.mobile = value;
      setAttributes({
        title: newValue
      });
    }
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "row"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
    label: "Color (optional)",
    value: colors.title,
    className: "input",
    onChange: value => {
      const newValue = {
        ...colors
      };
      newValue.title = value;
      setAttributes({
        colors: newValue
      });
    }
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "row"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
    label: "Max Width",
    value: widths.desktop.title,
    className: "input",
    onChange: value => {
      const newValue = {
        ...widths
      };
      newValue.desktop.title = value;
      setAttributes({
        widths: newValue
      });
    }
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
    label: "Mobile (optional)",
    value: widths.mobile.title,
    className: "input",
    onChange: value => {
      const newValue = {
        ...widths
      };
      newValue.mobile.title = value;
      setAttributes({
        widths: newValue
      });
    }
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "row"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
    label: "Margin Top",
    value: margins.desktop.title,
    className: "input",
    onChange: value => {
      const newValue = {
        ...margins
      };
      newValue.desktop.title = value;
      setAttributes({
        margins: newValue
      });
    }
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
    label: "Mobile (optional)",
    value: margins.mobile.title,
    className: "input",
    onChange: value => {
      const newValue = {
        ...margins
      };
      newValue.mobile.title = value;
      setAttributes({
        margins: newValue
      });
    }
  }))), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "block"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "row"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextareaControl, {
    label: "Description",
    help: "You could use all HTML tags in the description field.",
    value: description.desktop,
    className: "input",
    onChange: value => {
      const newValue = {
        ...description
      };
      newValue.desktop = value;
      setAttributes({
        description: newValue
      });
    }
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextareaControl, {
    label: "Mobile (optional)",
    value: description.mobile,
    className: "input",
    onChange: value => {
      const newValue = {
        ...description
      };
      newValue.mobile = value;
      setAttributes({
        description: newValue
      });
    }
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "row"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
    label: "Color (optional)",
    value: colors.description,
    className: "input",
    onChange: value => {
      const newValue = {
        ...colors
      };
      newValue.description = value;
      setAttributes({
        colors: newValue
      });
    }
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "row"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
    label: "Max Width",
    value: widths.desktop.description,
    className: "input",
    onChange: value => {
      const newValue = {
        ...widths
      };
      newValue.desktop.description = value;
      setAttributes({
        widths: newValue
      });
    }
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
    label: "Mobile (optional)",
    value: widths.mobile.description,
    className: "input",
    onChange: value => {
      const newValue = {
        ...widths
      };
      newValue.mobile.description = value;
      setAttributes({
        widths: newValue
      });
    }
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "row"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
    label: "Margin Top",
    value: margins.desktop.description,
    className: "input",
    onChange: value => {
      const newValue = {
        ...margins
      };
      newValue.desktop.description = value;
      setAttributes({
        margins: newValue
      });
    }
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
    label: "Mobile (optional)",
    value: margins.mobile.description,
    className: "input",
    onChange: value => {
      const newValue = {
        ...margins
      };
      newValue.mobile.description = value;
      setAttributes({
        margins: newValue
      });
    }
  }))), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "block"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "row"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
    label: "Button",
    value: button.desktop,
    className: "input",
    onChange: value => {
      const newValue = {
        ...button
      };
      newValue.desktop = value;
      setAttributes({
        button: newValue
      });
    }
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
    label: "Mobile (optional)",
    value: button.mobile,
    className: "input",
    onChange: value => {
      const newValue = {
        ...button
      };
      newValue.mobile = value;
      setAttributes({
        button: newValue
      });
    }
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "row"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
    label: "Button Link",
    value: button.target,
    className: "input",
    onChange: value => {
      const newValue = {
        ...button
      };
      newValue.target = value;
      setAttributes({
        button: newValue
      });
    }
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "row"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
    label: "Margin Top",
    value: margins.desktop.button,
    className: "input",
    onChange: value => {
      const newValue = {
        ...margins
      };
      newValue.desktop.button = value;
      setAttributes({
        margins: newValue
      });
    }
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
    label: "Mobile (optional)",
    value: margins.mobile.button,
    className: "input",
    onChange: value => {
      const newValue = {
        ...margins
      };
      newValue.mobile.button = value;
      setAttributes({
        margins: newValue
      });
    }
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "row"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.SelectControl, {
    label: "Button Type",
    value: button.type,
    className: "input",
    onChange: value => {
      const newValue = {
        ...button
      };
      newValue.type = value;
      setAttributes({
        button: newValue
      });
    },
    options: [{
      label: 'Primary Button',
      value: 'primary-button'
    }, {
      label: 'Outlined Button',
      value: 'outlined-button'
    }, {
      label: 'White Button',
      value: 'white-button'
    }, {
      label: 'Outlined White Button',
      value: 'outlined-white-button'
    }, {
      label: 'Link Button',
      value: 'link-button'
    }, {
      label: 'Line Button',
      value: 'line-button'
    }]
  }))), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "row"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.BaseControl, {
    label: "Background Image"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_1__.MediaUpload, {
    onSelect: value => {
      const newValue = {
        ...background
      };
      newValue.desktop = value;
      setAttributes({
        background: newValue
      });
    },
    type: "image",
    render: _ref2 => {
      let {
        open
      } = _ref2;
      return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
        className: "button",
        onClick: open
      }, background.desktop.url == 'background-0.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_background_0_jpg__WEBPACK_IMPORTED_MODULE_3__,
        alt: "background"
      }) : background.desktop.url == 'background-1.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_background_1_jpg__WEBPACK_IMPORTED_MODULE_5__,
        alt: "background"
      }) : background.desktop.url == 'background-2.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_background_2_jpg__WEBPACK_IMPORTED_MODULE_7__,
        alt: "background"
      }) : background.desktop.url == 'background-3.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_background_3_jpg__WEBPACK_IMPORTED_MODULE_9__,
        alt: "background"
      }) : background.desktop.url == 'background-4.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_background_4_jpg__WEBPACK_IMPORTED_MODULE_11__,
        alt: "background"
      }) : background.desktop.url == 'background-5.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_background_5_jpg__WEBPACK_IMPORTED_MODULE_13__,
        alt: "background"
      }) : background.desktop.url == 'background-6.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_background_6_jpg__WEBPACK_IMPORTED_MODULE_15__,
        alt: "background"
      }) : background.desktop.url == 'background-7.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_background_7_jpg__WEBPACK_IMPORTED_MODULE_17__,
        alt: "background"
      }) : background.desktop.url == 'background-8.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_background_8_jpg__WEBPACK_IMPORTED_MODULE_19__,
        alt: "background"
      }) : background.desktop.url == 'background-9.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_background_9_jpg__WEBPACK_IMPORTED_MODULE_21__,
        alt: "background"
      }) : background.desktop.url == 'background-10.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_background_10_jpg__WEBPACK_IMPORTED_MODULE_23__,
        alt: "background"
      }) : background.desktop.url ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: background.desktop.url,
        alt: "background"
      }) : 'Insert');
    }
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "dismiss",
    showTooltip: "true",
    label: "Delete image",
    className: "delete-button",
    onClick: () => {
      const newValue = {
        ...background
      };
      newValue.desktop = {
        url: '',
        alt: ''
      };
      setAttributes({
        background: newValue
      });
    }
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n1",
    onClick: () => {
      const newValue = {
        ...background
      };
      newValue.desktop = {
        url: 'background-0.jpg',
        alt: ''
      };
      setAttributes({
        background: newValue
      });
    }
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n2",
    onClick: () => {
      const newValue = {
        ...background
      };
      newValue.desktop = {
        url: 'background-1.jpg',
        alt: ''
      };
      setAttributes({
        background: newValue
      });
    }
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n3",
    onClick: () => {
      const newValue = {
        ...background
      };
      newValue.desktop = {
        url: 'background-2.jpg',
        alt: ''
      };
      setAttributes({
        background: newValue
      });
    }
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n4",
    onClick: () => {
      const newValue = {
        ...background
      };
      newValue.desktop = {
        url: 'background-3.jpg',
        alt: ''
      };
      setAttributes({
        background: newValue
      });
    }
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n5",
    onClick: () => {
      const newValue = {
        ...background
      };
      newValue.desktop = {
        url: 'background-4.jpg',
        alt: ''
      };
      setAttributes({
        background: newValue
      });
    }
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n6",
    onClick: () => {
      const newValue = {
        ...background
      };
      newValue.desktop = {
        url: 'background-5.jpg',
        alt: ''
      };
      setAttributes({
        background: newValue
      });
    }
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n7",
    onClick: () => {
      const newValue = {
        ...background
      };
      newValue.desktop = {
        url: 'background-6.jpg',
        alt: ''
      };
      setAttributes({
        background: newValue
      });
    }
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n8",
    onClick: () => {
      const newValue = {
        ...background
      };
      newValue.desktop = {
        url: 'background-7.jpg',
        alt: ''
      };
      setAttributes({
        background: newValue
      });
    }
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n9",
    onClick: () => {
      const newValue = {
        ...background
      };
      newValue.desktop = {
        url: 'background-8.jpg',
        alt: ''
      };
      setAttributes({
        background: newValue
      });
    }
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n10",
    onClick: () => {
      const newValue = {
        ...background
      };
      newValue.desktop = {
        url: 'background-9.jpg',
        alt: ''
      };
      setAttributes({
        background: newValue
      });
    }
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n11",
    onClick: () => {
      const newValue = {
        ...background
      };
      newValue.desktop = {
        url: 'background-10.jpg',
        alt: ''
      };
      setAttributes({
        background: newValue
      });
    }
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.BaseControl, {
    label: "Mobile (optional)"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_1__.MediaUpload, {
    onSelect: value => {
      const newValue = {
        ...background
      };
      newValue.mobile = value;
      setAttributes({
        background: newValue
      });
    },
    type: "image",
    render: _ref3 => {
      let {
        open
      } = _ref3;
      return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
        className: "button",
        onClick: open
      }, background.mobile.url == 'background-0-mobile.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_background_0_mobile_jpg__WEBPACK_IMPORTED_MODULE_4__,
        alt: "background"
      }) : background.mobile.url == 'background-1-mobile.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_background_1_mobile_jpg__WEBPACK_IMPORTED_MODULE_6__,
        alt: "background"
      }) : background.mobile.url == 'background-2-mobile.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_background_2_mobile_jpg__WEBPACK_IMPORTED_MODULE_8__,
        alt: "background"
      }) : background.mobile.url == 'background-3-mobile.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_background_3_mobile_jpg__WEBPACK_IMPORTED_MODULE_10__,
        alt: "background"
      }) : background.mobile.url == 'background-4-mobile.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_background_4_mobile_jpg__WEBPACK_IMPORTED_MODULE_12__,
        alt: "background"
      }) : background.mobile.url == 'background-5-mobile.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_background_5_mobile_jpg__WEBPACK_IMPORTED_MODULE_14__,
        alt: "background"
      }) : background.mobile.url == 'background-6-mobile.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_background_6_mobile_jpg__WEBPACK_IMPORTED_MODULE_16__,
        alt: "background"
      }) : background.mobile.url == 'background-7-mobile.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_background_7_mobile_jpg__WEBPACK_IMPORTED_MODULE_18__,
        alt: "background"
      }) : background.mobile.url == 'background-8-mobile.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_background_8_mobile_jpg__WEBPACK_IMPORTED_MODULE_20__,
        alt: "background"
      }) : background.mobile.url == 'background-9-mobile.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_background_9_mobile_jpg__WEBPACK_IMPORTED_MODULE_22__,
        alt: "background"
      }) : background.mobile.url == 'background-10-mobile.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_background_10_mobile_jpg__WEBPACK_IMPORTED_MODULE_24__,
        alt: "background"
      }) : background.mobile.url ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: background.mobile.url,
        alt: "background"
      }) : 'Insert');
    }
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "dismiss",
    showTooltip: "true",
    label: "Delete image",
    className: "delete-button",
    onClick: () => {
      const newValue = {
        ...background
      };
      newValue.mobile = {
        url: '',
        alt: ''
      };
      setAttributes({
        background: newValue
      });
    }
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n1",
    onClick: () => {
      const newValue = {
        ...background
      };
      newValue.mobile = {
        url: 'background-0-mobile.jpg',
        alt: ''
      };
      setAttributes({
        background: newValue
      });
    }
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n2",
    onClick: () => {
      const newValue = {
        ...background
      };
      newValue.mobile = {
        url: 'background-1-mobile.jpg',
        alt: ''
      };
      setAttributes({
        background: newValue
      });
    }
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n3",
    onClick: () => {
      const newValue = {
        ...background
      };
      newValue.mobile = {
        url: 'background-2-mobile.jpg',
        alt: ''
      };
      setAttributes({
        background: newValue
      });
    }
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n4",
    onClick: () => {
      const newValue = {
        ...background
      };
      newValue.mobile = {
        url: 'background-3-mobile.jpg',
        alt: ''
      };
      setAttributes({
        background: newValue
      });
    }
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n5",
    onClick: () => {
      const newValue = {
        ...background
      };
      newValue.mobile = {
        url: 'background-4-mobile.jpg',
        alt: ''
      };
      setAttributes({
        background: newValue
      });
    }
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n6",
    onClick: () => {
      const newValue = {
        ...background
      };
      newValue.mobile = {
        url: 'background-5-mobile.jpg',
        alt: ''
      };
      setAttributes({
        background: newValue
      });
    }
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n7",
    onClick: () => {
      const newValue = {
        ...background
      };
      newValue.mobile = {
        url: 'background-6-mobile.jpg',
        alt: ''
      };
      setAttributes({
        background: newValue
      });
    }
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n8",
    onClick: () => {
      const newValue = {
        ...background
      };
      newValue.mobile = {
        url: 'background-7-mobile.jpg',
        alt: ''
      };
      setAttributes({
        background: newValue
      });
    }
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n9",
    onClick: () => {
      const newValue = {
        ...background
      };
      newValue.mobile = {
        url: 'background-8-mobile.jpg',
        alt: ''
      };
      setAttributes({
        background: newValue
      });
    }
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n10",
    onClick: () => {
      const newValue = {
        ...background
      };
      newValue.mobile = {
        url: 'background-9-mobile.jpg',
        alt: ''
      };
      setAttributes({
        background: newValue
      });
    }
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n11",
    onClick: () => {
      const newValue = {
        ...background
      };
      newValue.mobile = {
        url: 'background-10-mobile.jpg',
        alt: ''
      };
      setAttributes({
        background: newValue
      });
    }
  }))), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "row"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.CheckboxControl, {
    label: "Increase description size",
    checked: bigText,
    onChange: value => setAttributes({
      bigText: value
    }),
    className: "checkbox"
  })))));
}

/***/ }),

/***/ "./blocks/src/hero-background/index.js":
/*!*********************************************!*\
  !*** ./blocks/src/hero-background/index.js ***!
  \*********************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/blocks */ "@wordpress/blocks");
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _style_scss__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./style.scss */ "./blocks/src/hero-background/style.scss");
/* harmony import */ var _block_json__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./block.json */ "./blocks/src/hero-background/block.json");
/* harmony import */ var _edit__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./edit */ "./blocks/src/hero-background/edit.js");




const {
  name
} = _block_json__WEBPACK_IMPORTED_MODULE_2__;
(0,_wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__.registerBlockType)(name, {
  edit: _edit__WEBPACK_IMPORTED_MODULE_3__["default"]
});

/***/ }),

/***/ "./blocks/src/hero-background/style.scss":
/*!***********************************************!*\
  !*** ./blocks/src/hero-background/style.scss ***!
  \***********************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./blocks/src/hero-background/assets/background-0-mobile.jpg":
/*!*******************************************************************!*\
  !*** ./blocks/src/hero-background/assets/background-0-mobile.jpg ***!
  \*******************************************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {

module.exports = __webpack_require__.p + "images/background-0-mobile.2917a898.jpg";

/***/ }),

/***/ "./blocks/src/hero-background/assets/background-0.jpg":
/*!************************************************************!*\
  !*** ./blocks/src/hero-background/assets/background-0.jpg ***!
  \************************************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {

module.exports = __webpack_require__.p + "images/background-0.aa659cdb.jpg";

/***/ }),

/***/ "./blocks/src/hero-background/assets/background-1-mobile.jpg":
/*!*******************************************************************!*\
  !*** ./blocks/src/hero-background/assets/background-1-mobile.jpg ***!
  \*******************************************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {

module.exports = __webpack_require__.p + "images/background-1-mobile.8d5e0ecd.jpg";

/***/ }),

/***/ "./blocks/src/hero-background/assets/background-1.jpg":
/*!************************************************************!*\
  !*** ./blocks/src/hero-background/assets/background-1.jpg ***!
  \************************************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {

module.exports = __webpack_require__.p + "images/background-1.bf702073.jpg";

/***/ }),

/***/ "./blocks/src/hero-background/assets/background-10-mobile.jpg":
/*!********************************************************************!*\
  !*** ./blocks/src/hero-background/assets/background-10-mobile.jpg ***!
  \********************************************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {

module.exports = __webpack_require__.p + "images/background-10-mobile.0e018af3.jpg";

/***/ }),

/***/ "./blocks/src/hero-background/assets/background-10.jpg":
/*!*************************************************************!*\
  !*** ./blocks/src/hero-background/assets/background-10.jpg ***!
  \*************************************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {

module.exports = __webpack_require__.p + "images/background-10.ff64a1ba.jpg";

/***/ }),

/***/ "./blocks/src/hero-background/assets/background-2-mobile.jpg":
/*!*******************************************************************!*\
  !*** ./blocks/src/hero-background/assets/background-2-mobile.jpg ***!
  \*******************************************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {

module.exports = __webpack_require__.p + "images/background-2-mobile.389d9228.jpg";

/***/ }),

/***/ "./blocks/src/hero-background/assets/background-2.jpg":
/*!************************************************************!*\
  !*** ./blocks/src/hero-background/assets/background-2.jpg ***!
  \************************************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {

module.exports = __webpack_require__.p + "images/background-2.b5301422.jpg";

/***/ }),

/***/ "./blocks/src/hero-background/assets/background-3-mobile.jpg":
/*!*******************************************************************!*\
  !*** ./blocks/src/hero-background/assets/background-3-mobile.jpg ***!
  \*******************************************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {

module.exports = __webpack_require__.p + "images/background-3-mobile.4d9766e4.jpg";

/***/ }),

/***/ "./blocks/src/hero-background/assets/background-3.jpg":
/*!************************************************************!*\
  !*** ./blocks/src/hero-background/assets/background-3.jpg ***!
  \************************************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {

module.exports = __webpack_require__.p + "images/background-3.5d279c8c.jpg";

/***/ }),

/***/ "./blocks/src/hero-background/assets/background-4-mobile.jpg":
/*!*******************************************************************!*\
  !*** ./blocks/src/hero-background/assets/background-4-mobile.jpg ***!
  \*******************************************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {

module.exports = __webpack_require__.p + "images/background-4-mobile.f64a110a.jpg";

/***/ }),

/***/ "./blocks/src/hero-background/assets/background-4.jpg":
/*!************************************************************!*\
  !*** ./blocks/src/hero-background/assets/background-4.jpg ***!
  \************************************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {

module.exports = __webpack_require__.p + "images/background-4.7b1a7ad2.jpg";

/***/ }),

/***/ "./blocks/src/hero-background/assets/background-5-mobile.jpg":
/*!*******************************************************************!*\
  !*** ./blocks/src/hero-background/assets/background-5-mobile.jpg ***!
  \*******************************************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {

module.exports = __webpack_require__.p + "images/background-5-mobile.0e018af3.jpg";

/***/ }),

/***/ "./blocks/src/hero-background/assets/background-5.jpg":
/*!************************************************************!*\
  !*** ./blocks/src/hero-background/assets/background-5.jpg ***!
  \************************************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {

module.exports = __webpack_require__.p + "images/background-5.ff64a1ba.jpg";

/***/ }),

/***/ "./blocks/src/hero-background/assets/background-6-mobile.jpg":
/*!*******************************************************************!*\
  !*** ./blocks/src/hero-background/assets/background-6-mobile.jpg ***!
  \*******************************************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {

module.exports = __webpack_require__.p + "images/background-6-mobile.4402c2ae.jpg";

/***/ }),

/***/ "./blocks/src/hero-background/assets/background-6.jpg":
/*!************************************************************!*\
  !*** ./blocks/src/hero-background/assets/background-6.jpg ***!
  \************************************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {

module.exports = __webpack_require__.p + "images/background-6.a0d25fb3.jpg";

/***/ }),

/***/ "./blocks/src/hero-background/assets/background-7-mobile.jpg":
/*!*******************************************************************!*\
  !*** ./blocks/src/hero-background/assets/background-7-mobile.jpg ***!
  \*******************************************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {

module.exports = __webpack_require__.p + "images/background-7-mobile.bfaa596f.jpg";

/***/ }),

/***/ "./blocks/src/hero-background/assets/background-7.jpg":
/*!************************************************************!*\
  !*** ./blocks/src/hero-background/assets/background-7.jpg ***!
  \************************************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {

module.exports = __webpack_require__.p + "images/background-7.45d1ed11.jpg";

/***/ }),

/***/ "./blocks/src/hero-background/assets/background-8-mobile.jpg":
/*!*******************************************************************!*\
  !*** ./blocks/src/hero-background/assets/background-8-mobile.jpg ***!
  \*******************************************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {

module.exports = __webpack_require__.p + "images/background-8-mobile.4c113049.jpg";

/***/ }),

/***/ "./blocks/src/hero-background/assets/background-8.jpg":
/*!************************************************************!*\
  !*** ./blocks/src/hero-background/assets/background-8.jpg ***!
  \************************************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {

module.exports = __webpack_require__.p + "images/background-8.c09c3b8c.jpg";

/***/ }),

/***/ "./blocks/src/hero-background/assets/background-9-mobile.jpg":
/*!*******************************************************************!*\
  !*** ./blocks/src/hero-background/assets/background-9-mobile.jpg ***!
  \*******************************************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {

module.exports = __webpack_require__.p + "images/background-9-mobile.cdb6ee57.jpg";

/***/ }),

/***/ "./blocks/src/hero-background/assets/background-9.jpg":
/*!************************************************************!*\
  !*** ./blocks/src/hero-background/assets/background-9.jpg ***!
  \************************************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {

module.exports = __webpack_require__.p + "images/background-9.2ac5c07a.jpg";

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

/***/ "./blocks/src/hero-background/block.json":
/*!***********************************************!*\
  !*** ./blocks/src/hero-background/block.json ***!
  \***********************************************/
/***/ (function(module) {

module.exports = JSON.parse('{"$schema":"https://schemas.wp.org/trunk/block.json","apiVersion":2,"name":"banescocontigo/hero-background","version":"1.0.0","title":"Hero","category":"widgets","icon":"admin-home","supports":{"html":false},"textdomain":"blocks","editorScript":"file:../../../blocks/build/hero-background.js","editorStyle":"file:../../../blocks/build/hero-background.css","style":"file:../../../blocks/build/style-hero-background.css","attributes":{"paddings":{"type":"object","default":{"desktop":{"top":"100px","bottom":"100px"},"mobile":{"top":"50px","bottom":"300px"}}},"margins":{"type":"object","default":{"desktop":{"top":"0px","bottom":"0px","title":"0px","description":"20px","button":"30px"},"mobile":{"top":"0px","bottom":"0px","title":"0px","description":"15px","button":"20px"}}},"gradient":{"type":"string","default":"#FFFFFF"},"title":{"type":"object","default":{"desktop":"Title","mobile":""}},"description":{"type":"object","default":{"desktop":"Very very very very very very very very very very very very very very very very very long description.","mobile":""}},"button":{"type":"object","default":{"desktop":"Button","mobile":"","target":"/","type":"white-button"}},"colors":{"type":"object","default":{"title":"#FFFFFF","description":"#FFFFFF"}},"widths":{"type":"object","default":{"desktop":{"title":"400px","description":"400px"},"mobile":{"title":"100%","description":"100%"}}},"background":{"type":"object","default":{"desktop":{"url":"background-1.jpg","alt":""},"mobile":{"url":"background-1-mobile.jpg","alt":""}}},"bigText":{"type":"boolean","default":false}}}');

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
/******/ 	/* webpack/runtime/global */
/******/ 	!function() {
/******/ 		__webpack_require__.g = (function() {
/******/ 			if (typeof globalThis === 'object') return globalThis;
/******/ 			try {
/******/ 				return this || new Function('return this')();
/******/ 			} catch (e) {
/******/ 				if (typeof window === 'object') return window;
/******/ 			}
/******/ 		})();
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
/******/ 	/* webpack/runtime/publicPath */
/******/ 	!function() {
/******/ 		var scriptUrl;
/******/ 		if (__webpack_require__.g.importScripts) scriptUrl = __webpack_require__.g.location + "";
/******/ 		var document = __webpack_require__.g.document;
/******/ 		if (!scriptUrl && document) {
/******/ 			if (document.currentScript)
/******/ 				scriptUrl = document.currentScript.src
/******/ 			if (!scriptUrl) {
/******/ 				var scripts = document.getElementsByTagName("script");
/******/ 				if(scripts.length) scriptUrl = scripts[scripts.length - 1].src
/******/ 			}
/******/ 		}
/******/ 		// When supporting browsers where an automatic publicPath is not supported you must specify an output.publicPath manually via configuration
/******/ 		// or pass an empty string ("") and set the __webpack_public_path__ variable from your code to use your own logic.
/******/ 		if (!scriptUrl) throw new Error("Automatic publicPath is not supported in this browser");
/******/ 		scriptUrl = scriptUrl.replace(/#.*$/, "").replace(/\?.*$/, "").replace(/\/[^\/]+$/, "/");
/******/ 		__webpack_require__.p = scriptUrl;
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
/******/ 			"hero-background": 0,
/******/ 			"./style-hero-background": 0
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
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["./style-hero-background"], function() { return __webpack_require__("./blocks/src/hero-background/index.js"); })
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;
//# sourceMappingURL=hero-background.js.map