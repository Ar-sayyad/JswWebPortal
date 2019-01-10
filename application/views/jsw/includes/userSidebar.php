<ul class="nav Menus"  style="">
        <h4 style="">Account Settings</h4>
        <?php if($title=='My Profile'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
            <a class="nav-link" id="dvmslink" href="<?php echo base_url();?>Account">
                    <i class="material-icons">people</i>
                    <span class="sidebar-normal"> My Profile </span>
                </a>
            </li>       
            <?php if($title=='Password'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                <a class="nav-link"  href="<?php echo base_url();?>Account/password">
                    <i class="material-icons">vpn_key</i>
                    <span class="sidebar-normal"> Password </span>
                </a>
            </li> 
            
                  
        </ul>   
<!----dvms------>
