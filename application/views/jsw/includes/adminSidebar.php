<ul class="nav Menus"  style="">
        <h4 style="">Settings</h4>
        <?php if($title=='Users'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
            <a class="nav-link" id="dvmslink" href="<?php echo base_url();?>Settings/users">
                    <i class="material-icons">people</i>
                    <span class="sidebar-normal"> Users </span>
                </a>
            </li>       
            <?php if($title=='Department'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                <a class="nav-link"  href="<?php echo base_url();?>Settings/department">
                    <i class="material-icons">settings_overscan</i>
                    <span class="sidebar-normal"> Departments </span>
                </a>
            </li> 
             <?php if($title=='Pages'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                <a class="nav-link"  href="<?php echo base_url();?>Settings/pages">
                    <i class="material-icons">assignment</i>
                    <span class="sidebar-normal"> Pages </span>
                </a>
            </li> 
                  
        </ul>   
<!----dvms------>
