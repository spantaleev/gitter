    const CONTENTS = 'Your mother is so ugly, glCullFace always returns TRUE.';

    protected $client;
            'ini.file' => 'config.ini',
            'cache.repos' =>  self::$cached_repos
        file_put_contents(self::$tmpdir . '/testrepo/test_file.txt', self::CONTENTS);
        file_put_contents(self::$tmpdir . '/testrepo/test_file1.txt', self::CONTENTS);
        file_put_contents(self::$tmpdir . '/testrepo/test_file2.txt', self::CONTENTS);
        file_put_contents(self::$tmpdir . '/testrepo/test_file3.txt', self::CONTENTS);
        file_put_contents(self::$tmpdir . '/testrepo/test_file4.txt', self::CONTENTS);
        file_put_contents(self::$tmpdir . '/testrepo/test_file5.txt', self::CONTENTS);
        file_put_contents(self::$tmpdir . '/testrepo/test_file6.txt', self::CONTENTS);
        file_put_contents(self::$tmpdir . '/testrepo/test_file7.txt', self::CONTENTS);
        file_put_contents(self::$tmpdir . '/testrepo/test_file8.txt', self::CONTENTS);
        file_put_contents(self::$tmpdir . '/testrepo/test_file9.txt', self::CONTENTS);
        $this->assertEquals(self::CONTENTS, $blob);
        $this->assertEquals($blame[1]['line'], PHP_EOL . ' ' . self::CONTENTS);
        file_put_contents(self::$tmpdir . '/testrepo/test file10.txt', self::CONTENTS);
    }
        # Following will not work with cache list
        $this->assertContains('nestedrepo', array_keys($all_repositories),
                'Nested repository is found in all repositories');
