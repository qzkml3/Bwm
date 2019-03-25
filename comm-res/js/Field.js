Field = {
	isEmpty: function (field, fieldName) {
		var work_flag = '';
		if (
			field[0] && field[0].type == 'checkbox' ||
			field[0] && field[0].type == 'radio'
		) {
			work_flag = '선택';
			var chkCnt = 0;
			for (var i = 0; i < field.length; i++) {
				if (field[i].checked) {
					chkCnt++;
				}
			}
			if (! chkCnt) {
				return this.isEmptyTrigger(field[0], fieldName, work_flag);
			}
		} else if (field.tagName.toLowerCase() == 'select') {
			if ($.trim(field.value) == "") {
				work_flag = '선택';
				return this.isEmptyTrigger(field, fieldName, work_flag);
			}
		} else {
			if ($.trim(field.value) == "") {
				work_flag = '입력';
				return this.isEmptyTrigger(field, fieldName, work_flag);
			}
		}



	}
	,
	isEmptyTrigger: function (field, fieldName, work_type) {
		alert(fieldName + '을(를) ' + work_type + ' 해주세요.');
		field.focus();
		return true;
	}
};