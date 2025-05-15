----------------------------------------------------------------------

my $fh = IO::File->new($libnet_cfg_out, "w") or
	die "Cannot create '$libnet_cfg_out': $!";

print "Writing $libnet_cfg_out\n";

pr