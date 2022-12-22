{"version":3,"sources":["ui.notification.center.js"],"names":["BX","namespace","instance","Object","defineProperty","UI","Notification","enumerable","get","Manager","this","stacks","create","balloons","balloonDefaults","stackDefaults","defaultPosition","Position","TOP_RIGHT","addCustomEvent","Event","getFullName","handleBalloonClose","bind","prototype","notify","options","type","isPlainObject","currentBalloon","getBalloonById","id","getBalloonByCategory","category","update","show","blink","stack","Stack","addStack","isNotEmptyString","position","getStackByPosition","getDefaultStack","balloonOptions","mergeEx","getBalloonDefaults","balloonType","getBalloonType","balloon","Balloon","Error","getId","balloonId","getCategory","removeBalloon","event","getBalloon","getStack","stackId","getDefaultPosition","getStackDefaults","setBalloonDefaults","setStackDefaults","getPositionCode","setOptions","code","setDefaultPosition"],"mappings":"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","file":""}