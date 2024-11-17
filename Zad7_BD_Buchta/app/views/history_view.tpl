
{extends file="main.tpl"}

{block name=zawartosc_strony}
<table class="alt">
    
    {if !isset($records[0])}
        
        
        <div > <h2 style="text-align: center">Brak rekordów do wyświetlenia</h2>  </div>
        
        
        {else}
										<thead>
											<tr>
												<th>Kwota Kredytu</th>
												<th>Ile Lat</th>
												<th>Ile Procent</th>
                                                                                                <th>Kwota Łączna</th>
                                                                                                <th>Miesięczna Rata</th>
											</tr>
										</thead>
										<tbody>
                                                                                    
                                                                                    {foreach item=record from=$records}
											<tr>
                                                                                            {foreach key=key item=item from=$record}
                                                                                            
                                                                                                <td>{$item}    </td>
                                                                                                
                                                                                                {/foreach}
											</tr>
										{/foreach}
										</tbody>
										<tfoot>
											<tr>
												
											</tr>
										</tfoot>
									</table>
{/if}
{/block}