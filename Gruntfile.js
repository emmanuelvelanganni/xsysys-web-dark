module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		compass: {
			dist: {
				options: {
					sassDir: 'sass',
					cssDir: 'stylesheets'
				}
			}
		},
		autoprefixer: {
			options: {
				browsers: ['last 5 version', '> 1%', 'ie 8'],
				safe: true
			},
			multiple_files: {
				expand: true, // Recursive
                cwd: "stylesheets", // The startup directory
                src: ["*.css"], // Source files
                dest: "stylesheets", // Destination
                ext: ".css" // File extension 
			},
		},
		cssmin: {
		  target: {
			files: [{
			  expand: true,
			  cwd: 'stylesheets',
			  src: ['*.css', '!*.min.css'],
			  dest: 'stylesheets',/*stylesheets/min - can be specified to create separate min folder*/
			  ext: '.css' /*.min.css can be specified to create separate min files*/
			}]
		  }
		},
		watch: {
			css: {
				files: '**/*.scss',
				tasks: ['compass', 'autoprefixer','cssmin']
			}
		}
	});
	grunt.loadNpmTasks('grunt-autoprefixer');
	grunt.loadNpmTasks('grunt-contrib-compass');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.registerTask('default',['watch']);
}