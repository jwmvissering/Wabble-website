module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        watch: {
            css: {
                files: '**/*.scss',
                tasks: ['sass']
            }
        },
        sass: {
            dist: {
                files: {
                    'css/style.css': 'scss/style.scss',
                    'css/home.css': 'scss/home.scss',
                    'css/header.css': 'scss/header.scss',
                    'css/websites.css': 'scss/websites.scss',
                    'css/applicaties.css': 'scss/applicaties.scss'
                }
            }
        }
    });
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.registerTask('default',['watch']);
};