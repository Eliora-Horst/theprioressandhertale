wp.blocks.registerBlockType('ehorst/line-number-generator', {
	title: 'Line Number Generator',
	icon: 'editor-ol',
	category: 'text',
	attributes: {
		numLines: {type: 'number'},
		frequency: {type: 'number', default: 5},
		fontSize: {type: 'number', default: 1.15},
		startingLine: {type: 'number', default: 1},
		stanzaBreaks: {type: 'text', default: ""}
		
	},
	edit: function(props){

		function updateNumLines(event){
			props.setAttributes({numLines:event.target.value})
		}
		function updateFrequency(event){
			props.setAttributes({frequency:event.target.value})
		}
		function updatefontSize(event){
			props.setAttributes({fontSize:event.target.value})
		}
		function updateStartingLine(event){
			props.setAttributes({startingLine:event.target.value})
		}
		function updateStanzaBreaks(event){
			props.setAttributes({stanzaBreaks:event.target.value})
		}
		

		return wp.element.createElement(
			"div",
			null,
			wp.element.createElement(
				"h5",
				null,
				"Line Number Generator"
			),
			wp.element.createElement(
				"label",
				null,
				"Total Number of Lines "
			),
			wp.element.createElement(
				"input", {
  					type: "number",
  					value: props.attributes.numLines,
  					onChange: updateNumLines,
			}),
			wp.element.createElement(
				"br",
				null,
			),
			wp.element.createElement(
				"label",
				null,
				"Frequency of Appearance "
			),
			wp.element.createElement(
				"input", {
  					type: "number",
  					value: props.attributes.frequency,
  					onChange: updateFrequency,
			}),
			wp.element.createElement(
				"br",
				null,
			),
			wp.element.createElement(
				"label",
				null,
				"Stanza Breaks "
			),
			wp.element.createElement(
				"input", {
  					type: "text",
  					value: props.attributes.stanzaBreaks,
  					onChange: updateStanzaBreaks,
			}),

			wp.element.createElement(
				"br",
				null,
			),
			wp.element.createElement(
				"label",
				null,
				"Starting Line "
			),
			wp.element.createElement(
				"input", {
  					type: "number",
  					value: props.attributes.startingLine,
  					onChange: updateStartingLine,
			}),

			wp.element.createElement(
				"br",
				null,
			),
			wp.element.createElement(
				"label",
				null,
				"Font Size (rem) "
			),
			wp.element.createElement(
				"input", {
					type: "number",
	  				value: props.attributes.fontSize,
	  				onChange: updatefontSize,	
  				}
  			)
		);

	},
	save: function(props){
		var output = [];
		var str = props.attributes.stanzaBreaks.replace(/\s/g, '');
		var stanzaSplit = str.split(",");
		
		var length = parseInt(props.attributes.startingLine)+parseInt(props.attributes.numLines);

		for(var i=props.attributes.startingLine;i<=length;i++){
			for(var j = 0; j<stanzaSplit.length; j++){
				if((i-1)==stanzaSplit[j]){
					output.push(wp.element.createElement(
					"p", 
					{style: "margin: 0; text-align: right; visibility:hidden"}, 
					"x"));
				}
			}

			if(i%props.attributes.frequency==0){
				output.push(wp.element.createElement(
				"p", 
				{style: "margin: 0; text-align: right; font-size:"+props.attributes.fontSize+"rem;"}, 
				i));
			}

			else{
				output.push(wp.element.createElement(
				"p", 
				{style: "margin: 0; text-align: right; visibility:hidden;"}, 
				"x"));
			}
		}

		return wp.element.createElement("div", null, output);
	}
})