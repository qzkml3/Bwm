window.b = (o) ->
  # console.log o  

b.str =
  ###* # 문자열에 문자가 있는지 판별###
  hasStr: (full_str, keyword) ->
    full_str.indexOf(keyword) > -1