@servers(['web' => 'revlv@revlv.com'])

@task('deploy')
  cd /home/revlv/revlv.com
  git pull origin master
  ./compile.sh
@endtask
