    protected static $cached_repos;

        $cached_dir = self::$tmpdir . DIRECTORY_SEPARATOR . 'cache';
        $fs->mkdir($cached_dir);
        self::$cached_repos = $cached_dir . DIRECTORY_SEPARATOR . 'repos.json';
            'hidden' => array(self::$tmpdir . '/hiddenrepo'),
			'ini.file' => 'config.ini',
        	'cache.repos' =>  self::$cached_repos

        $repository = $this->client->getRepositoryCached(self::$tmpdir, 'testrepo');
        $repository = $this->client->getRepositoryCached(self::$tmpdir, 'testrepo');
        $repository = $this->client->getRepositoryCached(self::$tmpdir, 'testrepo');
        $repository = $this->client->getRepositoryCached(self::$tmpdir, 'testrepo');
        $repository = $this->client->getRepositoryCached(self::$tmpdir, 'testrepo');
        $repository = $this->client->getRepositoryCached(self::$tmpdir, 'testrepo');
        $repository = $this->client->getRepositoryCached(self::$tmpdir, 'testrepo');
        $repository = $this->client->getRepositoryCached(self::$tmpdir, 'testrepo');
        $repository = $this->client->getRepositoryCached(self::$tmpdir, 'testrepo');
        $repository = $this->client->getRepositoryCached(self::$tmpdir, 'testrepo');
        $repository = $this->client->getRepositoryCached(self::$tmpdir, 'testrepo');
        $repository = $this->client->getRepositoryCached(self::$tmpdir, 'testrepo');
        $repository = $this->client->getRepositoryCached(self::$tmpdir, 'testrepo');
        $repository = $this->client->getRepositoryCached(self::$tmpdir, 'testrepo');
        $repository = $this->client->getRepositoryCached(self::$tmpdir, 'testrepo');
        $repository = $this->client->getRepositoryCached(self::$tmpdir, 'testrepo');
        $repository = $this->client->getRepositoryCached(self::$tmpdir, 'testrepo');
        $repository = $this->client->getRepositoryCached(self::$tmpdir, 'testrepo');
        $repository = $this->client->getRepositoryCached(self::$tmpdir, 'testrepo');
        $repository = $this->client->getRepositoryCached(self::$tmpdir, 'testrepo');
        $repository = $this->client->getRepositoryCached(self::$tmpdir, 'testrepo');
        $repository = $this->client->getRepositoryCached(self::$tmpdir, 'testrepo');
        $repository = $this->client->getRepositoryCached(self::$tmpdir, 'testrepo');
        $repository = $this->client->getRepositoryCached(self::$tmpdir, 'testrepo');
        $repository = $this->client->getRepositoryCached(self::$tmpdir, 'testrepo');
        $repository = $this->client->getRepositoryCached(self::$tmpdir, 'testrepo');

		# Following will not work with cache list
        #$nested_repositories = $this->client->getRepositories($nested_dir);
        #$this->assertCount(1, $nested_repositories, 'Only one nested repository');

        $this->assertContains('nestedrepo', array_keys($all_repositories), 'Nested repository is found in all repositories');