                                      <tr><td></td></tr>
                                      <tr>
                                        <td></td>
                                        <td></td>
                                        <?php foreach($data2 as $m): ?>
                                        <td align="center">TOTAL : </td>
                                        <td align="right"><?php echo number_format($m->debet,2,",",".");?></td>
                                        <td align="right"><?php echo number_format($m->kredit,2,",","."); ?></td>
                                        <?php endforeach ?>
                                      </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" >
      var $tanggalmulai = $("#tanggalmulai");
      $tanggalmulai.datepicker({dateFormat: 'yy-mm-dd'});
      var $tanggalselesai = $("#tanggalselesai");
      $tanggalselesai.datepicker({dateFormat: 'yy-mm-dd'});
      $(function(){
      $("#tanggalmulai").datepicker({
        dateFormat:"yy-mm-dd"
        ,changeMonth:true
        ,changeYear:true
        ,yearRange:"1930"
      });

    })
    </script>
