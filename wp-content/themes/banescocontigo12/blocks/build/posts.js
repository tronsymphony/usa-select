/******/ (function() { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./blocks/src/posts/edit.js":
/*!**********************************!*\
  !*** ./blocks/src/posts/edit.js ***!
  \**********************************/
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
/* harmony import */ var _assets_1_jpg__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./assets/1.jpg */ "./blocks/src/posts/assets/1.jpg");
/* harmony import */ var _assets_m_1_jpg__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./assets/m-1.jpg */ "./blocks/src/posts/assets/m-1.jpg");
/* harmony import */ var _assets_2_jpg__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./assets/2.jpg */ "./blocks/src/posts/assets/2.jpg");
/* harmony import */ var _assets_m_2_jpg__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./assets/m-2.jpg */ "./blocks/src/posts/assets/m-2.jpg");
/* harmony import */ var _assets_3_jpg__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./assets/3.jpg */ "./blocks/src/posts/assets/3.jpg");
/* harmony import */ var _assets_m_3_jpg__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./assets/m-3.jpg */ "./blocks/src/posts/assets/m-3.jpg");
/* harmony import */ var _assets_4_jpg__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ./assets/4.jpg */ "./blocks/src/posts/assets/4.jpg");
/* harmony import */ var _assets_m_4_jpg__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ./assets/m-4.jpg */ "./blocks/src/posts/assets/m-4.jpg");
/* harmony import */ var _assets_5_jpg__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! ./assets/5.jpg */ "./blocks/src/posts/assets/5.jpg");
/* harmony import */ var _assets_m_5_jpg__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! ./assets/m-5.jpg */ "./blocks/src/posts/assets/m-5.jpg");
/* harmony import */ var _assets_6_jpg__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! ./assets/6.jpg */ "./blocks/src/posts/assets/6.jpg");
/* harmony import */ var _assets_m_6_jpg__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! ./assets/m-6.jpg */ "./blocks/src/posts/assets/m-6.jpg");
/* harmony import */ var _assets_7_jpg__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! ./assets/7.jpg */ "./blocks/src/posts/assets/7.jpg");
/* harmony import */ var _assets_m_7_jpg__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! ./assets/m-7.jpg */ "./blocks/src/posts/assets/m-7.jpg");
/* harmony import */ var _assets_8_jpg__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! ./assets/8.jpg */ "./blocks/src/posts/assets/8.jpg");
/* harmony import */ var _assets_m_8_jpg__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! ./assets/m-8.jpg */ "./blocks/src/posts/assets/m-8.jpg");
/* harmony import */ var _assets_9_jpg__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(/*! ./assets/9.jpg */ "./blocks/src/posts/assets/9.jpg");
/* harmony import */ var _assets_m_9_jpg__WEBPACK_IMPORTED_MODULE_20__ = __webpack_require__(/*! ./assets/m-9.jpg */ "./blocks/src/posts/assets/m-9.jpg");
/* harmony import */ var _assets_10_jpg__WEBPACK_IMPORTED_MODULE_21__ = __webpack_require__(/*! ./assets/10.jpg */ "./blocks/src/posts/assets/10.jpg");
/* harmony import */ var _assets_m_10_jpg__WEBPACK_IMPORTED_MODULE_22__ = __webpack_require__(/*! ./assets/m-10.jpg */ "./blocks/src/posts/assets/m-10.jpg");
/* harmony import */ var _assets_11_jpg__WEBPACK_IMPORTED_MODULE_23__ = __webpack_require__(/*! ./assets/11.jpg */ "./blocks/src/posts/assets/11.jpg");
/* harmony import */ var _assets_m_11_jpg__WEBPACK_IMPORTED_MODULE_24__ = __webpack_require__(/*! ./assets/m-11.jpg */ "./blocks/src/posts/assets/m-11.jpg");
/* harmony import */ var _assets_12_jpg__WEBPACK_IMPORTED_MODULE_25__ = __webpack_require__(/*! ./assets/12.jpg */ "./blocks/src/posts/assets/12.jpg");
/* harmony import */ var _assets_m_12_jpg__WEBPACK_IMPORTED_MODULE_26__ = __webpack_require__(/*! ./assets/m-12.jpg */ "./blocks/src/posts/assets/m-12.jpg");
/* harmony import */ var _assets_13_jpg__WEBPACK_IMPORTED_MODULE_27__ = __webpack_require__(/*! ./assets/13.jpg */ "./blocks/src/posts/assets/13.jpg");
/* harmony import */ var _assets_m_13_jpg__WEBPACK_IMPORTED_MODULE_28__ = __webpack_require__(/*! ./assets/m-13.jpg */ "./blocks/src/posts/assets/m-13.jpg");






























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
    title,
    items1,
    items2,
    blue
  } = attributes;
  const setItemAttribute1 = (tab, attribute, value) => {
    setAttributes({
      items1: items1.map(item => {
        if (item.name === tab.name) {
          return {
            ...item,
            [attribute]: value
          };
        }
        return item;
      })
    });
  };
  const removeItem1 = tab => {
    setAttributes({
      items1: items1.filter(item => item.name !== tab.name)
    });
  };
  const addItem1 = name => {
    setAttributes({
      items1: [...items1, {
        name: name,
        title: 'New',
        description: '',
        button: '',
        target: '',
        primaryButton: '',
        primaryTarget: '',
        image: {
          url: '',
          alt: ''
        },
        mImage: {
          url: '',
          alt: ''
        },
        whiteText: false,
        big: false,
        mHide: false,
        green: false
      }]
    });
  };
  const setItemAttribute2 = (tab, attribute, value) => {
    setAttributes({
      items2: items2.map(item => {
        if (item.name === tab.name) {
          return {
            ...item,
            [attribute]: value
          };
        }
        return item;
      })
    });
  };
  const removeItem2 = tab => {
    setAttributes({
      items2: items2.filter(item => item.name !== tab.name)
    });
  };
  const addItem2 = name => {
    setAttributes({
      items2: [...items2, {
        name: name,
        title: 'New',
        description: '',
        button: '',
        target: '',
        primaryButton: '',
        primaryTarget: '',
        image: {
          url: '',
          alt: ''
        },
        mImage: {
          url: '',
          alt: ''
        },
        whiteText: false,
        big: false,
        mHide: false,
        green: false
      }]
    });
  };
  return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", (0,_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_1__.useBlockProps)(), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Placeholder, {
    label: 'Posts'
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
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
    label: "Title",
    value: title,
    className: "input",
    onChange: value => setAttributes({
      title: value
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TabPanel, {
    tabs: items1
  }, tab => (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Placeholder, {
    className: 'placeholder'
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "row"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
    label: "Tags",
    help: "You could use multiple tags by separating them by comma",
    value: tab.tags,
    className: "input",
    onChange: value => setItemAttribute1(tab, 'tags', value)
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "row"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
    label: "Title",
    value: tab.title,
    className: "input",
    onChange: value => setItemAttribute1(tab, 'title', value)
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "row"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextareaControl, {
    label: "Description",
    value: tab.description,
    className: "input",
    onChange: value => setItemAttribute1(tab, 'description', value)
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "row"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
    label: "Button",
    value: tab.button,
    className: "input",
    onChange: value => setItemAttribute1(tab, 'button', value)
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "row"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
    label: "Button Link",
    value: tab.target,
    className: "input",
    onChange: value => setItemAttribute1(tab, 'target', value)
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "row"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
    label: "Primary button",
    value: tab.primaryButton,
    className: "input",
    onChange: value => setItemAttribute1(tab, 'primaryButton', value)
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "row"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
    label: "Primary Button Link",
    value: tab.primaryTarget,
    className: "input",
    onChange: value => setItemAttribute1(tab, 'primaryTarget', value)
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "row"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.BaseControl, {
    label: "Background"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_1__.MediaUpload, {
    onSelect: value => setItemAttribute1(tab, 'image', value),
    type: "image",
    render: _ref2 => {
      let {
        open
      } = _ref2;
      return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
        className: "button",
        onClick: open
      }, tab.image.url == '1.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_1_jpg__WEBPACK_IMPORTED_MODULE_3__,
        alt: "image"
      }) : tab.image.url == '2.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_2_jpg__WEBPACK_IMPORTED_MODULE_5__,
        alt: "image"
      }) : tab.image.url == '3.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_3_jpg__WEBPACK_IMPORTED_MODULE_7__,
        alt: "image"
      }) : tab.image.url == '4.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_4_jpg__WEBPACK_IMPORTED_MODULE_9__,
        alt: "image"
      }) : tab.image.url == '5.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_5_jpg__WEBPACK_IMPORTED_MODULE_11__,
        alt: "image"
      }) : tab.image.url == '6.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_6_jpg__WEBPACK_IMPORTED_MODULE_13__,
        alt: "image"
      }) : tab.image.url == '7.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_7_jpg__WEBPACK_IMPORTED_MODULE_15__,
        alt: "image"
      }) : tab.image.url == '8.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_8_jpg__WEBPACK_IMPORTED_MODULE_17__,
        alt: "image"
      }) : tab.image.url == '9.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_9_jpg__WEBPACK_IMPORTED_MODULE_19__,
        alt: "image"
      }) : tab.image.url == '10.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_10_jpg__WEBPACK_IMPORTED_MODULE_21__,
        alt: "image"
      }) : tab.image.url == '11.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_11_jpg__WEBPACK_IMPORTED_MODULE_23__,
        alt: "image"
      }) : tab.image.url == '12.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_12_jpg__WEBPACK_IMPORTED_MODULE_25__,
        alt: "image"
      }) : tab.image.url == '13.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_13_jpg__WEBPACK_IMPORTED_MODULE_27__,
        alt: "image"
      }) : tab.image.url ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: tab.image.url,
        alt: "image"
      }) : 'Insert');
    }
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "dismiss",
    showTooltip: "true",
    label: "Delete image",
    className: "delete-button",
    onClick: () => setItemAttribute1(tab, 'image', {
      url: '',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n1",
    onClick: () => setItemAttribute1(tab, 'image', {
      url: '1.jpg',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n2",
    onClick: () => setItemAttribute1(tab, 'image', {
      url: '2.jpg',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n3",
    onClick: () => setItemAttribute1(tab, 'image', {
      url: '3.jpg',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n4",
    onClick: () => setItemAttribute1(tab, 'image', {
      url: '4.jpg',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n5",
    onClick: () => setItemAttribute1(tab, 'image', {
      url: '5.jpg',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n6",
    onClick: () => setItemAttribute1(tab, 'image', {
      url: '6.jpg',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n7",
    onClick: () => setItemAttribute1(tab, 'image', {
      url: '7.jpg',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n8",
    onClick: () => setItemAttribute1(tab, 'image', {
      url: '8.jpg',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n9",
    onClick: () => setItemAttribute1(tab, 'image', {
      url: '9.jpg',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n10",
    onClick: () => setItemAttribute1(tab, 'image', {
      url: '10.jpg',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n11",
    onClick: () => setItemAttribute1(tab, 'image', {
      url: '11.jpg',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n12",
    onClick: () => setItemAttribute1(tab, 'image', {
      url: '12.jpg',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n13",
    onClick: () => setItemAttribute1(tab, 'image', {
      url: '13.jpg',
      alt: ''
    })
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.BaseControl, {
    label: "Mobile background"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_1__.MediaUpload, {
    onSelect: value => setItemAttribute1(tab, 'mImage', value),
    type: "image",
    render: _ref3 => {
      let {
        open
      } = _ref3;
      return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
        className: "button",
        onClick: open
      }, tab.mImage.url == 'm-1.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_m_1_jpg__WEBPACK_IMPORTED_MODULE_4__,
        alt: "image"
      }) : tab.mImage.url == 'm-2.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_m_2_jpg__WEBPACK_IMPORTED_MODULE_6__,
        alt: "image"
      }) : tab.mImage.url == 'm-3.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_m_3_jpg__WEBPACK_IMPORTED_MODULE_8__,
        alt: "image"
      }) : tab.mImage.url == 'm-4.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_m_4_jpg__WEBPACK_IMPORTED_MODULE_10__,
        alt: "image"
      }) : tab.mImage.url == 'm-5.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_m_5_jpg__WEBPACK_IMPORTED_MODULE_12__,
        alt: "image"
      }) : tab.mImage.url == 'm-6.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_m_6_jpg__WEBPACK_IMPORTED_MODULE_14__,
        alt: "image"
      }) : tab.mImage.url == 'm-7.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_m_7_jpg__WEBPACK_IMPORTED_MODULE_16__,
        alt: "image"
      }) : tab.mImage.url == 'm-8.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_m_8_jpg__WEBPACK_IMPORTED_MODULE_18__,
        alt: "image"
      }) : tab.mImage.url == 'm-9.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_m_9_jpg__WEBPACK_IMPORTED_MODULE_20__,
        alt: "image"
      }) : tab.mImage.url == 'm-10.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_m_10_jpg__WEBPACK_IMPORTED_MODULE_22__,
        alt: "image"
      }) : tab.mImage.url == 'm-11.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_m_11_jpg__WEBPACK_IMPORTED_MODULE_24__,
        alt: "image"
      }) : tab.mImage.url == 'm-12.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_m_12_jpg__WEBPACK_IMPORTED_MODULE_26__,
        alt: "image"
      }) : tab.mImage.url == 'm-13.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_m_13_jpg__WEBPACK_IMPORTED_MODULE_28__,
        alt: "image"
      }) : tab.mImage.url ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: tab.mImage.url,
        alt: "image"
      }) : 'Insert');
    }
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "dismiss",
    showTooltip: "true",
    label: "Delete image",
    className: "delete-button",
    onClick: () => setItemAttribute1(tab, 'mImage', {
      url: '',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n1",
    onClick: () => setItemAttribute1(tab, 'mImage', {
      url: 'm-1.jpg',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n2",
    onClick: () => setItemAttribute1(tab, 'mImage', {
      url: 'm-2.jpg',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n3",
    onClick: () => setItemAttribute1(tab, 'mImage', {
      url: 'm-3.jpg',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n4",
    onClick: () => setItemAttribute1(tab, 'mImage', {
      url: 'm-4.jpg',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n5",
    onClick: () => setItemAttribute1(tab, 'mImage', {
      url: 'm-5.jpg',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n6",
    onClick: () => setItemAttribute1(tab, 'mImage', {
      url: 'm-6.jpg',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n7",
    onClick: () => setItemAttribute1(tab, 'mImage', {
      url: 'm-7.jpg',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n8",
    onClick: () => setItemAttribute1(tab, 'mImage', {
      url: 'm-8.jpg',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n9",
    onClick: () => setItemAttribute1(tab, 'mImage', {
      url: 'm-9.jpg',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n10",
    onClick: () => setItemAttribute1(tab, 'mImage', {
      url: 'm-10.jpg',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n11",
    onClick: () => setItemAttribute1(tab, 'mImage', {
      url: 'm-11.jpg',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n12",
    onClick: () => setItemAttribute1(tab, 'mImage', {
      url: 'm-12.jpg',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n13",
    onClick: () => setItemAttribute1(tab, 'mImage', {
      url: 'm-13.jpg',
      alt: ''
    })
  }))), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "row"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.CheckboxControl, {
    label: "Large image",
    checked: tab.big,
    onChange: value => setItemAttribute1(tab, 'big', value),
    className: "checkbox"
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "row"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.CheckboxControl, {
    label: "White text",
    checked: tab.whiteText,
    onChange: value => setItemAttribute1(tab, 'whiteText', value),
    className: "checkbox"
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "row"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.CheckboxControl, {
    label: "Mobile hidden",
    checked: tab.mHide,
    onChange: value => setItemAttribute1(tab, 'mHide', value),
    className: "checkbox"
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "row"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.CheckboxControl, {
    label: "Green buttons",
    checked: tab.green,
    onChange: value => setItemAttribute1(tab, 'green', value),
    className: "checkbox"
  })), items1.length > 1 && (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    variant: "primary",
    className: "primary-button",
    onClick: () => removeItem1(tab)
  }, "Remove"))), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    variant: "primary",
    className: "primary-button",
    onClick: () => addItem1(Math.random())
  }, "Add new"), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TabPanel, {
    tabs: items2
  }, tab => (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Placeholder, {
    className: 'placeholder'
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "row"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
    label: "Tags",
    help: "You could use multiple tags by separating them by comma",
    value: tab.tags,
    className: "input",
    onChange: value => setItemAttribute2(tab, 'tags', value)
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "row"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
    label: "Title",
    value: tab.title,
    className: "input",
    onChange: value => setItemAttribute2(tab, 'title', value)
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "row"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextareaControl, {
    label: "Description",
    help: "You could use all HTML tags in the description field.",
    value: tab.description,
    className: "input",
    onChange: value => setItemAttribute2(tab, 'description', value)
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "row"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
    label: "Button",
    value: tab.button,
    className: "input",
    onChange: value => setItemAttribute2(tab, 'button', value)
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "row"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
    label: "Button Link",
    value: tab.target,
    className: "input",
    onChange: value => setItemAttribute2(tab, 'target', value)
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "row"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
    label: "Primary button",
    value: tab.primaryButton,
    className: "input",
    onChange: value => setItemAttribute2(tab, 'primaryButton', value)
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "row"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
    label: "Primary Button Link",
    value: tab.primaryTarget,
    className: "input",
    onChange: value => setItemAttribute2(tab, 'primaryTarget', value)
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "row"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.BaseControl, {
    label: "Background"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_1__.MediaUpload, {
    onSelect: value => setItemAttribute2(tab, 'image', value),
    type: "image",
    render: _ref4 => {
      let {
        open
      } = _ref4;
      return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
        className: "button",
        onClick: open
      }, tab.image.url == '1.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_1_jpg__WEBPACK_IMPORTED_MODULE_3__,
        alt: "image"
      }) : tab.image.url == '2.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_2_jpg__WEBPACK_IMPORTED_MODULE_5__,
        alt: "image"
      }) : tab.image.url == '3.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_3_jpg__WEBPACK_IMPORTED_MODULE_7__,
        alt: "image"
      }) : tab.image.url == '4.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_4_jpg__WEBPACK_IMPORTED_MODULE_9__,
        alt: "image"
      }) : tab.image.url == '5.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_5_jpg__WEBPACK_IMPORTED_MODULE_11__,
        alt: "image"
      }) : tab.image.url == '6.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_6_jpg__WEBPACK_IMPORTED_MODULE_13__,
        alt: "image"
      }) : tab.image.url == '7.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_7_jpg__WEBPACK_IMPORTED_MODULE_15__,
        alt: "image"
      }) : tab.image.url == '8.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_8_jpg__WEBPACK_IMPORTED_MODULE_17__,
        alt: "image"
      }) : tab.image.url == '9.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_9_jpg__WEBPACK_IMPORTED_MODULE_19__,
        alt: "image"
      }) : tab.image.url == '10.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_10_jpg__WEBPACK_IMPORTED_MODULE_21__,
        alt: "image"
      }) : tab.image.url == '11.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_11_jpg__WEBPACK_IMPORTED_MODULE_23__,
        alt: "image"
      }) : tab.image.url == '12.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_12_jpg__WEBPACK_IMPORTED_MODULE_25__,
        alt: "image"
      }) : tab.image.url == '13.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_13_jpg__WEBPACK_IMPORTED_MODULE_27__,
        alt: "image"
      }) : tab.image.url ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: tab.image.url,
        alt: "image"
      }) : 'Insert');
    }
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "dismiss",
    showTooltip: "true",
    label: "Delete image",
    className: "delete-button",
    onClick: () => setItemAttribute2(tab, 'image', {
      url: '',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n2",
    onClick: () => setItemAttribute2(tab, 'image', {
      url: '1.jpg',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n2",
    onClick: () => setItemAttribute2(tab, 'image', {
      url: '2.jpg',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n3",
    onClick: () => setItemAttribute2(tab, 'image', {
      url: '3.jpg',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n4",
    onClick: () => setItemAttribute2(tab, 'image', {
      url: '4.jpg',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n5",
    onClick: () => setItemAttribute2(tab, 'image', {
      url: '5.jpg',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n6",
    onClick: () => setItemAttribute2(tab, 'image', {
      url: '6.jpg',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n7",
    onClick: () => setItemAttribute2(tab, 'image', {
      url: '7.jpg',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n8",
    onClick: () => setItemAttribute2(tab, 'image', {
      url: '8.jpg',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n9",
    onClick: () => setItemAttribute2(tab, 'image', {
      url: '9.jpg',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n10",
    onClick: () => setItemAttribute2(tab, 'image', {
      url: '10.jpg',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n11",
    onClick: () => setItemAttribute2(tab, 'image', {
      url: '11.jpg',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n12",
    onClick: () => setItemAttribute2(tab, 'image', {
      url: '12.jpg',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n13",
    onClick: () => setItemAttribute2(tab, 'image', {
      url: '13.jpg',
      alt: ''
    })
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.BaseControl, {
    label: "Mobile background"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_1__.MediaUpload, {
    onSelect: value => setItemAttribute2(tab, 'mImage', value),
    type: "image",
    render: _ref5 => {
      let {
        open
      } = _ref5;
      return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
        className: "button",
        onClick: open
      }, tab.mImage.url == 'm-1.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_m_1_jpg__WEBPACK_IMPORTED_MODULE_4__,
        alt: "image"
      }) : tab.mImage.url == 'm-2.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_m_2_jpg__WEBPACK_IMPORTED_MODULE_6__,
        alt: "image"
      }) : tab.mImage.url == 'm-3.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_m_3_jpg__WEBPACK_IMPORTED_MODULE_8__,
        alt: "image"
      }) : tab.mImage.url == 'm-4.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_m_4_jpg__WEBPACK_IMPORTED_MODULE_10__,
        alt: "image"
      }) : tab.mImage.url == 'm-5.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_m_5_jpg__WEBPACK_IMPORTED_MODULE_12__,
        alt: "image"
      }) : tab.mImage.url == 'm-6.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_m_6_jpg__WEBPACK_IMPORTED_MODULE_14__,
        alt: "image"
      }) : tab.mImage.url == 'm-7.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_m_7_jpg__WEBPACK_IMPORTED_MODULE_16__,
        alt: "image"
      }) : tab.mImage.url == 'm-8.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_m_8_jpg__WEBPACK_IMPORTED_MODULE_18__,
        alt: "image"
      }) : tab.mImage.url == 'm-9.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_m_9_jpg__WEBPACK_IMPORTED_MODULE_20__,
        alt: "image"
      }) : tab.mImage.url == 'm-10.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_m_10_jpg__WEBPACK_IMPORTED_MODULE_22__,
        alt: "image"
      }) : tab.mImage.url == 'm-11.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_m_11_jpg__WEBPACK_IMPORTED_MODULE_24__,
        alt: "image"
      }) : tab.mImage.url == 'm-12.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_m_12_jpg__WEBPACK_IMPORTED_MODULE_26__,
        alt: "image"
      }) : tab.mImage.url == 'm-13.jpg' ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: _assets_m_13_jpg__WEBPACK_IMPORTED_MODULE_28__,
        alt: "image"
      }) : tab.mImage.url ? (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("img", {
        src: tab.mImage.url,
        alt: "image"
      }) : 'Insert');
    }
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "dismiss",
    showTooltip: "true",
    label: "Delete image",
    className: "delete-button",
    onClick: () => setItemAttribute2(tab, 'mImage', {
      url: '',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n1",
    onClick: () => setItemAttribute2(tab, 'mImage', {
      url: 'm-1.jpg',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n2",
    onClick: () => setItemAttribute2(tab, 'mImage', {
      url: 'm-2.jpg',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n3",
    onClick: () => setItemAttribute2(tab, 'mImage', {
      url: 'm-3.jpg',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n4",
    onClick: () => setItemAttribute2(tab, 'mImage', {
      url: 'm-4.jpg',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n5",
    onClick: () => setItemAttribute2(tab, 'mImage', {
      url: 'm-5.jpg',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n6",
    onClick: () => setItemAttribute2(tab, 'mImage', {
      url: 'm-6.jpg',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n7",
    onClick: () => setItemAttribute2(tab, 'mImage', {
      url: 'm-7.jpg',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n8",
    onClick: () => setItemAttribute2(tab, 'mImage', {
      url: 'm-8.jpg',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n9",
    onClick: () => setItemAttribute2(tab, 'mImage', {
      url: 'm-9.jpg',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n10",
    onClick: () => setItemAttribute2(tab, 'mImage', {
      url: 'm-10.jpg',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n11",
    onClick: () => setItemAttribute2(tab, 'mImage', {
      url: 'm-11.jpg',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n12",
    onClick: () => setItemAttribute2(tab, 'mImage', {
      url: 'm-12.jpg',
      alt: ''
    })
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    icon: "cover-image",
    showTooltip: "true",
    label: "Set default image",
    className: "default-image-button n13",
    onClick: () => setItemAttribute2(tab, 'mImage', {
      url: 'm-13.jpg',
      alt: ''
    })
  }))), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "row"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.CheckboxControl, {
    label: "Large image",
    checked: tab.big,
    onChange: value => setItemAttribute2(tab, 'big', value),
    className: "checkbox"
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "row"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.CheckboxControl, {
    label: "White text",
    checked: tab.whiteText,
    onChange: value => setItemAttribute2(tab, 'whiteText', value),
    className: "checkbox"
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "row"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.CheckboxControl, {
    label: "Mobile hidden",
    checked: tab.mHide,
    onChange: value => setItemAttribute2(tab, 'mHide', value),
    className: "checkbox"
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "row"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.CheckboxControl, {
    label: "Green buttons",
    checked: tab.green,
    onChange: value => setItemAttribute2(tab, 'green', value),
    className: "checkbox"
  })), items2.length > 1 && (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    variant: "primary",
    className: "primary-button",
    onClick: () => removeItem2(tab)
  }, "Remove"))), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
    variant: "primary",
    className: "primary-button",
    onClick: () => addItem2(Math.random())
  }, "Add new")), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "row"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.CheckboxControl, {
    label: "Blue theme",
    checked: blue,
    onChange: value => setAttributes({
      blue: value
    }),
    className: "checkbox"
  }))));
}

/***/ }),

/***/ "./blocks/src/posts/index.js":
/*!***********************************!*\
  !*** ./blocks/src/posts/index.js ***!
  \***********************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/blocks */ "@wordpress/blocks");
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _style_scss__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./style.scss */ "./blocks/src/posts/style.scss");
/* harmony import */ var _block_json__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./block.json */ "./blocks/src/posts/block.json");
/* harmony import */ var _edit__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./edit */ "./blocks/src/posts/edit.js");




const {
  name
} = _block_json__WEBPACK_IMPORTED_MODULE_2__;
(0,_wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__.registerBlockType)(name, {
  edit: _edit__WEBPACK_IMPORTED_MODULE_3__["default"]
});

/***/ }),

/***/ "./blocks/src/posts/style.scss":
/*!*************************************!*\
  !*** ./blocks/src/posts/style.scss ***!
  \*************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./blocks/src/posts/assets/1.jpg":
/*!***************************************!*\
  !*** ./blocks/src/posts/assets/1.jpg ***!
  \***************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {

module.exports = __webpack_require__.p + "images/1.43f1a75f.jpg";

/***/ }),

/***/ "./blocks/src/posts/assets/10.jpg":
/*!****************************************!*\
  !*** ./blocks/src/posts/assets/10.jpg ***!
  \****************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {

module.exports = __webpack_require__.p + "images/10.5ce0bfbd.jpg";

/***/ }),

/***/ "./blocks/src/posts/assets/11.jpg":
/*!****************************************!*\
  !*** ./blocks/src/posts/assets/11.jpg ***!
  \****************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {

module.exports = __webpack_require__.p + "images/11.e903d2c9.jpg";

/***/ }),

/***/ "./blocks/src/posts/assets/12.jpg":
/*!****************************************!*\
  !*** ./blocks/src/posts/assets/12.jpg ***!
  \****************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {

module.exports = __webpack_require__.p + "images/12.5dbde671.jpg";

/***/ }),

/***/ "./blocks/src/posts/assets/13.jpg":
/*!****************************************!*\
  !*** ./blocks/src/posts/assets/13.jpg ***!
  \****************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {

module.exports = __webpack_require__.p + "images/13.38945bb8.jpg";

/***/ }),

/***/ "./blocks/src/posts/assets/2.jpg":
/*!***************************************!*\
  !*** ./blocks/src/posts/assets/2.jpg ***!
  \***************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {

module.exports = __webpack_require__.p + "images/2.157f58e4.jpg";

/***/ }),

/***/ "./blocks/src/posts/assets/3.jpg":
/*!***************************************!*\
  !*** ./blocks/src/posts/assets/3.jpg ***!
  \***************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {

module.exports = __webpack_require__.p + "images/3.ea0ba47d.jpg";

/***/ }),

/***/ "./blocks/src/posts/assets/4.jpg":
/*!***************************************!*\
  !*** ./blocks/src/posts/assets/4.jpg ***!
  \***************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {

module.exports = __webpack_require__.p + "images/4.d53b0218.jpg";

/***/ }),

/***/ "./blocks/src/posts/assets/5.jpg":
/*!***************************************!*\
  !*** ./blocks/src/posts/assets/5.jpg ***!
  \***************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {

module.exports = __webpack_require__.p + "images/5.ad235a5f.jpg";

/***/ }),

/***/ "./blocks/src/posts/assets/6.jpg":
/*!***************************************!*\
  !*** ./blocks/src/posts/assets/6.jpg ***!
  \***************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {

module.exports = __webpack_require__.p + "images/6.0366b555.jpg";

/***/ }),

/***/ "./blocks/src/posts/assets/7.jpg":
/*!***************************************!*\
  !*** ./blocks/src/posts/assets/7.jpg ***!
  \***************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {

module.exports = __webpack_require__.p + "images/7.a3511f7f.jpg";

/***/ }),

/***/ "./blocks/src/posts/assets/8.jpg":
/*!***************************************!*\
  !*** ./blocks/src/posts/assets/8.jpg ***!
  \***************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {

module.exports = __webpack_require__.p + "images/8.d16ca5f1.jpg";

/***/ }),

/***/ "./blocks/src/posts/assets/9.jpg":
/*!***************************************!*\
  !*** ./blocks/src/posts/assets/9.jpg ***!
  \***************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {

module.exports = __webpack_require__.p + "images/9.c26769ef.jpg";

/***/ }),

/***/ "./blocks/src/posts/assets/m-1.jpg":
/*!*****************************************!*\
  !*** ./blocks/src/posts/assets/m-1.jpg ***!
  \*****************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {

module.exports = __webpack_require__.p + "images/m-1.784cf445.jpg";

/***/ }),

/***/ "./blocks/src/posts/assets/m-10.jpg":
/*!******************************************!*\
  !*** ./blocks/src/posts/assets/m-10.jpg ***!
  \******************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {

module.exports = __webpack_require__.p + "images/m-10.c60f86f1.jpg";

/***/ }),

/***/ "./blocks/src/posts/assets/m-11.jpg":
/*!******************************************!*\
  !*** ./blocks/src/posts/assets/m-11.jpg ***!
  \******************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {

module.exports = __webpack_require__.p + "images/m-11.d4f415fe.jpg";

/***/ }),

/***/ "./blocks/src/posts/assets/m-12.jpg":
/*!******************************************!*\
  !*** ./blocks/src/posts/assets/m-12.jpg ***!
  \******************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {

module.exports = __webpack_require__.p + "images/m-12.2e5cf7eb.jpg";

/***/ }),

/***/ "./blocks/src/posts/assets/m-13.jpg":
/*!******************************************!*\
  !*** ./blocks/src/posts/assets/m-13.jpg ***!
  \******************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {

module.exports = __webpack_require__.p + "images/m-13.6548a57a.jpg";

/***/ }),

/***/ "./blocks/src/posts/assets/m-2.jpg":
/*!*****************************************!*\
  !*** ./blocks/src/posts/assets/m-2.jpg ***!
  \*****************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {

module.exports = __webpack_require__.p + "images/m-2.02b30e99.jpg";

/***/ }),

/***/ "./blocks/src/posts/assets/m-3.jpg":
/*!*****************************************!*\
  !*** ./blocks/src/posts/assets/m-3.jpg ***!
  \*****************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {

module.exports = __webpack_require__.p + "images/m-3.0adf8dc9.jpg";

/***/ }),

/***/ "./blocks/src/posts/assets/m-4.jpg":
/*!*****************************************!*\
  !*** ./blocks/src/posts/assets/m-4.jpg ***!
  \*****************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {

module.exports = __webpack_require__.p + "images/m-4.784cf445.jpg";

/***/ }),

/***/ "./blocks/src/posts/assets/m-5.jpg":
/*!*****************************************!*\
  !*** ./blocks/src/posts/assets/m-5.jpg ***!
  \*****************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {

module.exports = __webpack_require__.p + "images/m-5.b0c658d6.jpg";

/***/ }),

/***/ "./blocks/src/posts/assets/m-6.jpg":
/*!*****************************************!*\
  !*** ./blocks/src/posts/assets/m-6.jpg ***!
  \*****************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {

module.exports = __webpack_require__.p + "images/m-6.75b025fb.jpg";

/***/ }),

/***/ "./blocks/src/posts/assets/m-7.jpg":
/*!*****************************************!*\
  !*** ./blocks/src/posts/assets/m-7.jpg ***!
  \*****************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {

module.exports = __webpack_require__.p + "images/m-7.e69e2b9c.jpg";

/***/ }),

/***/ "./blocks/src/posts/assets/m-8.jpg":
/*!*****************************************!*\
  !*** ./blocks/src/posts/assets/m-8.jpg ***!
  \*****************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {

module.exports = __webpack_require__.p + "images/m-8.9fc7d753.jpg";

/***/ }),

/***/ "./blocks/src/posts/assets/m-9.jpg":
/*!*****************************************!*\
  !*** ./blocks/src/posts/assets/m-9.jpg ***!
  \*****************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {

module.exports = __webpack_require__.p + "images/m-9.c443b783.jpg";

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

/***/ "./blocks/src/posts/block.json":
/*!*************************************!*\
  !*** ./blocks/src/posts/block.json ***!
  \*************************************/
/***/ (function(module) {

module.exports = JSON.parse('{"$schema":"https://schemas.wp.org/trunk/block.json","apiVersion":2,"name":"banescocontigo/posts","version":"1.0.0","title":"Posts","category":"widgets","icon":"screenoptions","supports":{"html":false},"textdomain":"blocks","editorScript":"file:../../../blocks/build/posts.js","editorStyle":"file:../../../blocks/build/posts.css","style":"file:../../../blocks/build/style-posts.css","attributes":{"paddings":{"type":"object","default":{"desktop":{"top":"100px","bottom":"100px"},"mobile":{"top":"50px","bottom":"50px"}}},"margins":{"type":"object","default":{"desktop":{"top":"0px","bottom":"0px"},"mobile":{"top":"0px","bottom":"0px"}}},"gradient":{"type":"string","default":"#FFFFFF"},"title":{"type":"string","default":"Title"},"items1":{"type":"array","default":[{"name":"tab1","tags":"tag","title":"Title #1","description":"Very very very very very very very very very very very long description.","button":"Button","target":"/","primaryButton":"Primary Button","primaryTarget":"/","image":{"url":"1.jpg","alt":""},"mImage":{"url":"m-1.jpg","alt":""},"whiteText":true,"big":true,"mHide":false,"green":false}]},"items2":{"type":"array","default":[{"name":"tab2","tags":"tag","title":"Title #2","description":"Very very very very very very very very very very very long description.","button":"Button","target":"/","primaryButton":"Primary Button","primaryTarget":"/","image":{"url":"2.jpg","alt":""},"mImage":{"url":"m-2.jpg","alt":""},"whiteText":false,"big":false,"mHide":false,"green":false},{"name":"tab3","tags":"tag","title":"Title #3","description":"Very very very very very very very very very very very long description.","button":"Button","target":"/","primaryButton":"Primary Button","primaryTarget":"/","image":{"url":"3.jpg","alt":""},"mImage":{"url":"","alt":""},"whiteText":true,"big":false,"mHide":false,"green":false}]},"blue":{"type":"boolean","default":false}}}');

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
/******/ 			"posts": 0,
/******/ 			"./style-posts": 0
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
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["./style-posts"], function() { return __webpack_require__("./blocks/src/posts/index.js"); })
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;
//# sourceMappingURL=posts.js.map