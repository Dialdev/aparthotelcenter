{"version":3,"sources":["assets/js/jquery.debounce-throttle.js"],"names":["$","extend","debounce","fn","timeout","invokeAsap","ctx","arguments","length","timer","args","this","apply","clearTimeout","setTimeout","throttle","needInvoke","callee","jQuery"],"mappings":"CAAA,SAAUA,GAENA,EAAEC,QASEC,SAAW,SAASC,EAAIC,EAASC,EAAYC,GAElB,GAApBC,UAAUC,QAAoC,kBAAdH,IAC/BC,EAAMD,EACNA,GAAa,GAGjB,IAAII,EAEJ,OAAO,WAEH,IAAIC,EAAOH,UACXD,EAAMA,GAAOK,KAEbN,IAAeI,GAASN,EAAGS,MAAMN,EAAKI,GAEtCG,aAAaJ,GAEbA,EAAQK,WAAW,WACfT,GAAcF,EAAGS,MAAMN,EAAKI,GAC5BD,EAAQ,MACTL,KAYXW,SAAW,SAASZ,EAAIC,EAASE,GAE7B,IAAIG,EAAOC,EAAMM,EAEjB,OAAO,WAEHN,EAAOH,UACPS,GAAa,EACbV,EAAMA,GAAOK,KAEbF,GAAS,WACFO,GACCb,EAAGS,MAAMN,EAAKI,GACdM,GAAa,EACbP,EAAQK,WAAWP,UAAUU,OAAQb,IAGrCK,EAAQ,aAU7BS","file":"jquery.debounce-throttle.min.js","sourcesContent":["(function($) {\n\n    $.extend({\n\n        /**\n         * Debounce's decorator\n         * @param {Function} fn original function\n         * @param {Number} timeout timeout\n         * @param {Boolean} [invokeAsap=false] invoke function as soon as possible\n         * @param {Object} [ctx] context of original function\n         */\n        debounce : function(fn, timeout, invokeAsap, ctx) {\n\n            if(arguments.length == 3 && typeof invokeAsap != 'boolean') {\n                ctx = invokeAsap;\n                invokeAsap = false;\n            }\n\n            var timer;\n\n            return function() {\n\n                var args = arguments;\n                ctx = ctx || this;\n\n                invokeAsap && !timer && fn.apply(ctx, args);\n\n                clearTimeout(timer);\n\n                timer = setTimeout(function() {\n                    invokeAsap || fn.apply(ctx, args);\n                    timer = null;\n                }, timeout);\n\n            };\n\n        },\n\n        /**\n         * Throttle's decorator\n         * @param {Function} fn original function\n         * @param {Number} timeout timeout\n         * @param {Object} [ctx] context of original function\n         */\n        throttle : function(fn, timeout, ctx) {\n\n            var timer, args, needInvoke;\n\n            return function() {\n\n                args = arguments;\n                needInvoke = true;\n                ctx = ctx || this;\n\n                timer || (function() {\n                    if(needInvoke) {\n                        fn.apply(ctx, args);\n                        needInvoke = false;\n                        timer = setTimeout(arguments.callee, timeout);\n                    }\n                    else {\n                        timer = null;\n                    }\n                })();\n\n            };\n\n        }\n\n    });\n\n})(jQuery);"]}