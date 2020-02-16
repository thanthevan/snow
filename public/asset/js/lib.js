
    $(function () {
        let add_new = $('#add-new');
        let container_wp = $('#container-wp');
        
        let tpl = (id) => {
            return  `<div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input name="customCheck0${id}" id="customCheck0${id}" type="checkbox" class="custom-control-input">
                            <label for="customCheck0${id}" class="custom-control-label">Đây là câu trả lời đúng</label>
                        </div>
                        <div class="form-group">
                            <input name="inputcustomCheck0${id}" type="text" class="form-control"  placeholder="Câu trả lời">
                        </div>
                    </div>`;

        }
        add_new.on('click', function () {
            let custom_checkbox = $('.custom-checkbox');
            if(custom_checkbox.length === 0) {
                container_wp.append(tpl(0));
            }else {
                let index = custom_checkbox.length + 1;
                container_wp.append(tpl(index));
            }
        });
    });