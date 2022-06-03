# Grad_php
모든 php 파일들의 password와 dbname은 본인이 설정한 것으로 수정이 필요하다.

각 테이블은 다음과 같다.

member : nickname, email(key), password, phone, device_ox

avatar_info : avatar(key), front, back, a_left, a_right

mem_avatar : email(key), avatar

device : email(key), dname(key)

friend : email(key), f_email(key)

guest : gnum(key), gname, gavatar

map : mname(key), access

guest테이블의 gnum을 제외한 모든 테이블의 모든 값들의 데이터 유형은 VARCHAR이다. gnum은 AUTO_INCREMENT이다.
