module.exports = function(grunt) {
  'use strict';

  // Project configuration.
  grunt.initConfig({

    // Clean files from dist/ before build
    clean: {
      css: ["public/dist/*.css", "public/dist/*.css.map"],
      fonts: ["public/fonts/**"]
    },

    // Copy FontAwesome files to the fonts/ directory
    copy: {
      fonts: {
        src: [
          'bower_components/font-awesome/fonts/**'
        ],
        dest: 'public/fonts/',
        flatten: true,
        expand: true
      }
    },

    // Transpile LESS
    less: {
      options: {
        sourceMap: true,
        paths: ['bower_components/bootstrap/less']
      },
      prod: {
        options: {
          compress: true,
          cleancss: true
        },
        files: {
          "public/dist/style.css": "src/css/style.less"
        }
      }
    },

    // Watch for changes in LESS and JavaScript files,
    // relint/retranspile when a file changes
    watch: {
      options: {
        livereload: true
      },
      markup: {
        files: ['public/index.php']
      },
      styles: {
        files: ['src/css/**.less'],
        tasks: ['clean:css', 'less']
      },
      data: {
        files: ['src/data/**/*.aml'],
        tasks: ['archieml']
      }
    },

    // Bake ArchieML files into JSON
    archieml: {
      findings: {
        files: {
          'public/data/findings.json': 'src/data/findings/*.aml'
        }
      }
    },

    // Deploy to CMG servers with FTP
    ftpush: {
      stage: {
        auth: {
          host: 'host.coxmediagroup.com',
          port: 21,
          authKey: 'cmg'
        },
        src: 'public',
        dest: '/stage_aas/projects/sports/wickline-depositions',
        exclusions: ['dist/tmp','Thumbs.db'],
        simple: true,
        useList: false
      },
      prod: {
        auth: {
          host: 'host.coxmediagroup.com',
          port: 21,
          authKey: 'cmg'
        },
        src: 'public',
        dest: '/prod_aas/projects/sports/wickline-depositions',
        exclusions: ['dist/tmp','Thumbs.db'],
        simple: true,
        useList: false
      }
    }

  });

  // Load the task plugins
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-ftpush');
  grunt.loadNpmTasks('grunt-archieml');

  grunt.registerTask('default', ['archieml', 'clean', 'copy', 'less']);
  grunt.registerTask('stage', ['default','ftpush:stage']);
  grunt.registerTask('prod', ['default','ftpush:prod']);

};
