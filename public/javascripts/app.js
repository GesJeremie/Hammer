(function() {
  'use strict';

  var globals = typeof window === 'undefined' ? global : window;
  if (typeof globals.require === 'function') return;

  var modules = {};
  var cache = {};
  var has = ({}).hasOwnProperty;

  var aliases = {};

  var endsWith = function(str, suffix) {
    return str.indexOf(suffix, str.length - suffix.length) !== -1;
  };

  var unalias = function(alias, loaderPath) {
    var start = 0;
    if (loaderPath) {
      if (loaderPath.indexOf('components/' === 0)) {
        start = 'components/'.length;
      }
      if (loaderPath.indexOf('/', start) > 0) {
        loaderPath = loaderPath.substring(start, loaderPath.indexOf('/', start));
      }
    }
    var result = aliases[alias + '/index.js'] || aliases[loaderPath + '/deps/' + alias + '/index.js'];
    if (result) {
      return 'components/' + result.substring(0, result.length - '.js'.length);
    }
    return alias;
  };

  var expand = (function() {
    var reg = /^\.\.?(\/|$)/;
    return function(root, name) {
      var results = [], parts, part;
      parts = (reg.test(name) ? root + '/' + name : name).split('/');
      for (var i = 0, length = parts.length; i < length; i++) {
        part = parts[i];
        if (part === '..') {
          results.pop();
        } else if (part !== '.' && part !== '') {
          results.push(part);
        }
      }
      return results.join('/');
    };
  })();
  var dirname = function(path) {
    return path.split('/').slice(0, -1).join('/');
  };

  var localRequire = function(path) {
    return function(name) {
      var absolute = expand(dirname(path), name);
      return globals.require(absolute, path);
    };
  };

  var initModule = function(name, definition) {
    var module = {id: name, exports: {}};
    cache[name] = module;
    definition(module.exports, localRequire(name), module);
    return module.exports;
  };

  var require = function(name, loaderPath) {
    var path = expand(name, '.');
    if (loaderPath == null) loaderPath = '/';
    path = unalias(name, loaderPath);

    if (has.call(cache, path)) return cache[path].exports;
    if (has.call(modules, path)) return initModule(path, modules[path]);

    var dirIndex = expand(path, './index');
    if (has.call(cache, dirIndex)) return cache[dirIndex].exports;
    if (has.call(modules, dirIndex)) return initModule(dirIndex, modules[dirIndex]);

    throw new Error('Cannot find module "' + name + '" from '+ '"' + loaderPath + '"');
  };

  require.alias = function(from, to) {
    aliases[to] = from;
  };

  require.register = require.define = function(bundle, fn) {
    if (typeof bundle === 'object') {
      for (var key in bundle) {
        if (has.call(bundle, key)) {
          modules[key] = bundle[key];
        }
      }
    } else {
      modules[bundle] = fn;
    }
  };

  require.list = function() {
    var result = [];
    for (var item in modules) {
      if (has.call(modules, item)) {
        result.push(item);
      }
    }
    return result;
  };

  require.brunch = true;
  globals.require = require;
})();
require.register("config", function(exports, require, module) {
module.exports = {
  app: {
    name: 'My Gotham Application',
    version: 0.1
  }
};
});

;require.register("controllers/example-controller", function(exports, require, module) {
var Controller, Example,
  extend = function(child, parent) { for (var key in parent) { if (hasProp.call(parent, key)) child[key] = parent[key]; } function ctor() { this.constructor = child; } ctor.prototype = parent.prototype; child.prototype = new ctor(); child.__super__ = parent.prototype; return child; },
  hasProp = {}.hasOwnProperty;

Controller = require('core/controller');

Example = (function(superClass) {
  extend(Example, superClass);

  function Example() {
    return Example.__super__.constructor.apply(this, arguments);
  }

  Example.prototype.before = function() {};

  Example.prototype.run = function() {};

  return Example;

})(Controller);

module.exports = Example;
});

;require.register("helpers", function(exports, require, module) {
_.mixin({
  isBatman: function(name) {
    if (name.toLowerCase() === "batman") {
      return true;
    }
    return false;
  }
});
});

;require.register("initialize", function(exports, require, module) {
var Bootstrap;

Bootstrap = require('core/bootstrap');

$(function() {
  var bootstrap;
  bootstrap = new Bootstrap({
    request: window.location.pathname
  });
  return bootstrap.run();
});
});

;require.register("plugins/hammer/alert", function(exports, require, module) {
$.fn.hammerAlert = function(options) {
  return this.each(function() {
    return $(this).find('span').on('click', function() {
      return $(this).parent().remove();
    });
  });
};
});

;require.register("plugins/hammer/file", function(exports, require, module) {
$.hammerFile = function() {
  var baseTemplate;
  baseTemplate = "<div class=\"hammer-file-container\"><a id=\"{id}\" class=\"{class}\">{label}</a></div>";
  $('input[type=file]').each(function(index) {
    var klass, label, template;
    $(this).attr('id', 'hammer-file-target-' + index);
    klass = $(this).attr('data-class');
    label = $(this).attr('data-label');
    template = baseTemplate;
    if (klass !== void 0 && klass.length > 0) {
      template = template.split('{class}').join(klass);
    } else {
      template = template.split('{class}').join('button');
    }
    if (label !== void 0 && label.length > 0) {
      template = template.split('{label}').join(label);
    } else {
      template = template.split('{label}').join('Choose File');
    }
    template = template.split('{id}').join('hammer-file-toggle-' + index);
    $(this).before(template);
    return $(this).css('display', 'none');
  });
  $('[id^=hammer-file-toggle]').on('click', function() {
    var target;
    target = $(this).attr('id').split('toggle').join('target');
    return $('#' + target).click();
  });
  return $('[id^=hammer-file-target]').on('change', function() {
    var toggle, value;
    value = $(this).val();
    if (value.length > 0) {
      value = value.replace("C:\\fakepath\\", '');
      toggle = $(this).attr('id').split('target').join('toggle');
      return $('#' + toggle).html(value);
    }
  });
};
});

;require.register("plugins/hammer/hammer", function(exports, require, module) {
require('plugins/hammer/alert');

$('.alert.\--with-close').hammerAlert();

require('plugins/hammer/file');

$.hammerFile();

$(":checkbox, :radio").labelauty({
  "class": 'hammer-checkboxes'
});

$('[data-toggle=tooltip]').tooltipster();
});

;require.register("routes", function(exports, require, module) {
module.exports = function(route) {};
});

;require.register("start", function(exports, require, module) {
require('plugins/hammer/hammer');
});

;require.register("validators", function(exports, require, module) {
Validator.errors;

Validator.attributes;
});

;require.register("views/hello", function(exports, require, module) {
var __templateData = function (__obj) {
  if (!__obj) __obj = {};
  var __out = [], __capture = function(callback) {
    var out = __out, result;
    __out = [];
    callback.call(this);
    result = __out.join('');
    __out = out;
    return __safe(result);
  }, __sanitize = function(value) {
    if (value && value.ecoSafe) {
      return value;
    } else if (typeof value !== 'undefined' && value != null) {
      return __escape(value);
    } else {
      return '';
    }
  }, __safe, __objSafe = __obj.safe, __escape = __obj.escape;
  __safe = __obj.safe = function(value) {
    if (value && value.ecoSafe) {
      return value;
    } else {
      if (!(typeof value !== 'undefined' && value != null)) value = '';
      var result = new String(value);
      result.ecoSafe = true;
      return result;
    }
  };
  if (!__escape) {
    __escape = __obj.escape = function(value) {
      return ('' + value)
        .replace(/&/g, '&amp;')
        .replace(/</g, '&lt;')
        .replace(/>/g, '&gt;')
        .replace(/"/g, '&quot;');
    };
  }
  (function() {
    (function() {
      __out.push('<style>\n  @import url(http://fonts.googleapis.com/css?family=Lato:300,700);\n\n  body {\n    margin:0;\n    font-family:\'Lato\', sans-serif;\n    text-align:center;\n    color: #999;\n    height: 100%;\n    width: 100%;\n    background-color: #F7F7F7\n  }\n\n  .gothamjs-welcome {\n    position: relative;\n    margin-top: 15%;\n    text-align: center;\n  }\n\n  .gothamjs-welcome h3 {\n    font-size: 32px;\n    font-weight: 300;\n  }\n\n  .gothamjs-welcome h1 {\n    font-size: 60px;\n    font-weight: 700;\n    color: black;\n    text-transform: uppercase;\n  }\n\n  .gothamjs-welcome p {\n    font-size: 16px;\n    margin-bottom: 3em;\n  }\n\n  .gothamjs-welcome a {\n    background-color: #02baf2;\n    color: #fff;\n    border-color: #02baf2;\n    font-weight: 300;\n    cursor: pointer;\n    text-decoration: none !important;\n    -ms-touch-action: manipulation;\n    touch-action: manipulation;\n    cursor: pointer;\n    -webkit-user-select: none;\n    -moz-user-select: none;\n    -ms-user-select: none;\n    user-select: none;\n    border-radius: 5px;\n    border: 1px solid transparent;\n    font-size: 21px;\n    padding: 9.6px 19.2px;\n  }\n\n  .gothamjs-welcome img {\n    width: 150px\n  }\n\n</style>\n\n<div class="gothamjs-welcome">\n\n  <img src=\'data:image/png;base64,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\'>\n  <h1>');
    
      __out.push(this.framework);
    
      __out.push('</h1>\n  <h3>You just loaded Gotham, it\'s an impressive start.</h3>\n  <p>I\'m executed by `start.coffee` and you can find me in `views/hello.eco`</p>\n  <a href="http://gothamjs.io/documentation">Documentation</a>\n</div>\n');
    
    }).call(this);
    
  }).call(__obj);
  __obj.safe = __objSafe, __obj.escape = __escape;
  return __out.join('');
};
if (typeof define === 'function' && define.amd) {
  define([], function() {
    return __templateData;
  });
} else if (typeof module === 'object' && module && module.exports) {
  module.exports = __templateData;
} else {
  __templateData;
}
});

;require.register("core/bootstrap", function(exports, require, module) {
var Bootstrap;

Bootstrap = (function() {
  function Bootstrap(options) {
    this.options = options;
  }

  Bootstrap.prototype.run = function() {
    var controller, params, path, response, router;
    require('helpers');
    require('validators');
    require('start');
    router = new Router(this.options.request);
    require('routes')(router);
    router.run();
    if (router.passes()) {
      response = router.response();
      params = response.params;
      if (_.isFunction(response.result)) {
        return response.result(params);
      } else {
        path = this._formatPath(response.result);
        controller = require('controllers/' + path);
        controller = new controller();
        if (controller['before'] != null) {
          controller.before(params);
        }
        if (!controller._gothamStop) {
          return controller.run(params);
        }
      }
    }
  };

  Bootstrap.prototype._formatPath = function(str) {
    return str.split('.').join('/');
  };

  return Bootstrap;

})();

module.exports = Bootstrap;
});

;require.register("core/controller", function(exports, require, module) {
var Controller, View;

View = require('core/view');

Controller = (function() {
  Controller.prototype._gothamStop = false;

  function Controller() {}

  Controller.prototype.stop = function() {
    return this._gothamStop = true;
  };

  Controller.prototype.log = function(value) {
    return console.log(value);
  };

  Controller.prototype.on = function(trigger, selector, handler) {
    return $(selector).on(trigger, handler);
  };

  Controller.prototype.off = function(trigger, selector, handler) {
    return $(selector).off(trigger, handler);
  };

  Controller.prototype.delayed = function(trigger, selector, handler) {
    return $(document).on(trigger, selector, handler);
  };

  Controller.prototype.view = function(template, datas) {
    var view;
    view = new View();
    return view.render(template, datas);
  };

  return Controller;

})();

module.exports = Controller;
});

;require.register("core/view", function(exports, require, module) {
var View;

View = (function() {
  function View() {}

  View.prototype.render = function(template, datas) {
    template = template.split('.').join('/');
    template = require('views/' + template);
    return template(datas);
  };

  return View;

})();

module.exports = View;
});

;
//# sourceMappingURL=app.js.map