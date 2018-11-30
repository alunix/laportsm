 if(confirm('Apakah anda yakin akan menghapus tag ini ?'))
                                        {
                                        event.preventDefault();
                                        document.getElementById('delete-form-{{ $tag->id }}').submit();
                                        }
                                    else{
                                        event.preventDefault();
                                    }