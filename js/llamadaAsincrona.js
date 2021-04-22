function load_script_promise(url){
	return new Promise(function(resolve, reject){
		var head = document.getElementsByTagName('head')[0]
		var script = document.createElement('script')
		script.type = 'text/javascript'
		script.addEventListener('load', function(){
			this.removeEventListener('load', arguments.callee)
			resolve(script)
		})
		script.src = url
		head.appendChild(script)
	})
}

load_script_promise("../js/slideAndBackground.js");

load_script_promise("../js/slider-proConfig.js");

