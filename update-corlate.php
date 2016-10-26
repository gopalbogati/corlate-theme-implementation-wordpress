
UPDATE cl_options SET option_value = replace(option_value, 'http://202.166.207.19/c/gopal/corlate', 'http://localhost/corlate') WHERE option_name = 'home' OR option_name = 'siteurl';
UPDATE cl_posts SET guid = replace(guid, 'http://202.166.207.19/c/gopal/corlate','http://localhost/corlate');
UPDATE cl_posts SET post_content = replace(post_content, 'http://202.166.207.19/c/gopal/corlate', 'http://localhost/corlate');
UPDATE cl_postmeta SET meta_value = replace(meta_value, 'http://202.166.207.19/c/gopal/corlate', 'http://localhost/corlate');