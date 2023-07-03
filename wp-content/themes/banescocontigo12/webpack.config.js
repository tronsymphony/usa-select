const glob = require('glob');
const path = require( 'path' );
const defaultConfig = require('@wordpress/scripts/config/webpack.config');

module.exports = {
	...defaultConfig,
	entry: glob.sync('./blocks/src/*').reduce(function(obj, el){
		obj[path.parse(el).name] = el;
		return obj
 },{}),
	output: {
		filename: '[name].js',
		path: path.resolve( process.cwd(), 'blocks/build' ),
	},
};