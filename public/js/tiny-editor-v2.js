function tiny2(){
    this.section = '';
    this.theme   = 'modern';
    this.height  =  '300';
    this.width   = '100';
    this.base_url= _base;
    this.content_css = '';
    this.inline      = false;
    
    this.base_path = function(){
        var $this = this;
		if($this.base_url == ''){
			var path = $(location).attr('pathname');
			path.indexOf(1);
			path.toLowerCase();
			var len =  path.split("/").length;
			console.log('Count : ' + path.split("/").length);
			if(len >= 7){
				return '/' + path.split("/")[1]+'/'+path.split("/")[2];
			}else if(len >= 5){
				return '/' + path.split("/")[1];
			}else{
				return '/';
			}
		}else{
			return $this.base_url;
        }
    };

	this.mini = function(){
		var _this = this;
		tinymce.init({
			selector: _this.section,
			theme	: _this.theme,
			width 	: _this.width,
			height	: _this.height,
			inline 	: _this.inline,
			relative_urls: false,
			remove_script_host: false,
			default_link_target: "_blank",
			fontsize_formats: "8pt 10pt 12pt 14pt 16px 18pt 20px 22px 24pt 32px 36pt 42px",
			plugins: [
				"advlist autolink lists link image charmap print preview hr anchor pagebreak fullscreen imagetools",
				"searchreplace wordcount visualblocks visualchars  ",
				"insertdatetime media nonbreaking save table contextmenu directionality",
				"emoticons template paste textcolor colorpicker textpattern responsivefilemanager code "
			],
			content_css : _this.content_css,
			menubar:false,
			toolbar1: " bold italic  forecolor fontsizeselect | link image responsivefilemanager | preview code fullscreen",
			image_advtab: true,
			templates: [
				{title: 'Test template 1', content: 'Test 1'},
				{title: 'Test template 2', content: 'Test 2'}
			],
			external_filemanager_path: this.base_path() + "/public/lib/filemanager/",
			filemanager_title:"File Explorer" ,
			external_plugins: { "filemanager" : this.base_path() + "/public/lib/filemanager/plugin.min.js"}
		});

	};

    this.text = function(){
        var _this = this;
        console.log('section : ', _this.section );
		tinymce.init({
			selector: _this.section,
			theme	: _this.theme,
			width 	: _this.width,
			height	: _this.height,
			inline 	: _this.inline,
			relative_urls: false,
			remove_script_host: false,
			default_link_target: "_blank",
			fontsize_formats: "8pt 10pt 12pt 14pt 16px 18pt 20px 22px 24pt 32px 36pt 42px",
			plugins: [
				"advlist autolink lists link image charmap print preview hr anchor pagebreak fullscreen imagetools",
				"searchreplace wordcount visualblocks visualchars  ",
				"insertdatetime media nonbreaking save table contextmenu directionality",
				"emoticons template paste textcolor colorpicker textpattern responsivefilemanager code "
			],
			content_css : _this.content_css,
			menubar:false,
			toolbar1: " bold italic  forecolor fontsizeselect hr | link preview code fullscreen",
			image_advtab: true,
			templates: [
				{title: 'Test template 1', content: 'Test 1'},
				{title: 'Test template 2', content: 'Test 2'}
			],
			external_filemanager_path: this.base_path() + "/public/lib/filemanager/",
			filemanager_title:"File Explorer" ,
			external_plugins: { "filemanager" : this.base_path() + "/public/lib/filemanager/plugin.min.js"}
		});

	};


}