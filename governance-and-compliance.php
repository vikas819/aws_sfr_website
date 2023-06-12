<?php $page ="Governance & compliance";
include("meta_tags.php"); 
include("header.php"); ?>
		<section class="page-title p_relative pt_40 " style="background-color: #fff;">
            <div class="auto-container">
                <div class="content-box">
                    <h1 class="d_block fs_30 lh_40 fw_medium">Governance and compliance</h1>
                    <hr>
                </div>
            </div>
        </section>
		<section class="event-details p_relative pb_40">
            <div class="auto-container">
                <div class="lower-content p_relative d_block">
                    <div class="row clearfix">
                        <div class="col-lg-8 col-md-9 col-sm-12 content-column">
                            <div class="content-box shadow pr_20 pl_20 pt_30 pb_30">
                            	<p>We take privacy very seriously and have put several processes into place to ensure that our products, services and workstreams are compliant.</p>
                            	<h3 class="fs_24 fw_medium mb_20">Employee vetting</h3>
                            	<p>All staff undergo an assessment as part of the application process, and everyone who has access to sensitive information are subject to additional checks, regardless of their location. All staff with access to sensitive information undergo vetting to an appropriate standard as defined by the Warwickshire Vetting Unit. All operational staff are certified medical professionals in verified good standing with their governing bodies.</p>
                            	<hr>
                            	<h3 class="fs_24 fw_medium mb_20">Technology</h3>
                            	<p>We often get questions about our technology solutions and security protocols, and have put together several supporting documents which we are happy to share. These technical documents and Q&As can help with your business case, filling out a DPIA, or ensuring your DPO understands how our process works. We also have several policies in place which all staff must adhere to, including a Data Protection Policy, a Data Retention & Deletion Policy and a Password Policy.</p>
                            	<p>SFR Medical uses the following mediums to share patient sensitive information both internally and externally:</p>
								<ul class="list clearfix mb_20">
                                    <li class="p_relative d_block fs_16 lh_22 fw_normal pl_20 mb_10">Microsoft Dynamics and CDS database</li>
                                    <li class="p_relative d_block fs_16 lh_22 fw_normal pl_20 mb_10">Microsoft Power Portals</li>
                                    <li class="p_relative d_block fs_16 lh_22 fw_normal pl_20 mb_10">NHS digital platform(NHS Mail, Egress and NHS OneDrive)</li>
                                </ul>
                                <p>All sensitive data is stored on an NHS One Drive/ Microsoft Dynamics UK datacentres and accessed by authorized SFR Medical staff only via Azure virtual machines(VMs). The Azure VMs ensures that</p>
                                <ul class="list clearfix mb_20">
                                    <li class="p_relative d_block fs_16 lh_22 fw_normal pl_20 mb_10">users cannot copy or store any information outside of the virtual machines</li>
                                    <li class="p_relative d_block fs_16 lh_22 fw_normal pl_20 mb_10">access to emails and virtual machines is granted to only those who need it, and who have been approved by the CMO and CTO</li>
                                    <li class="p_relative d_block fs_16 lh_22 fw_normal pl_20 mb_10">multifactor authentication (per NHS digital guidelines) is enabled for emails, One Drive, VM access and applications to ensure additional security against potential cyber-attacks</li>
                                </ul>
                                <p>The NHS email system is end-to-end encrypted and allows for secure transmission, mitigating for paper-loss or electronic device loss and inadvertent information disclosure. The NHSMail Live Service is accredited and compliant with ISO27001 as well as a number of other security standards. It has been approved as a permitted method of emailing personal identifiable data (PID) or confidential data in the UK (https://digital.nhs.uk/services/microsoft-office-365-for-the-nhs).</p>

								<p>Alongside, Microsoft ensures that the data at it datacentres(data at rest) and data in transit are encrypted to minimize security risks. Microsoft Dynamics follows industry standard encryption protocols, and provides strong access management through multifactor authentication and azure security centre. Microsoft Cyber Defense Operations Center (CDOC) protects Microsoft’s Cloud infrastructure and customers from evolving threats.</p>

								<p>We comply with relevant guidelines with regards to data retention. During the retention period, data is stored by SFR Medical on secure Azure BLOB storage.</p>

								<p>SFR Medical is Cyber Essentials certified and complies with 14 cloud principles.</p>
								<hr/>
								<h3 class="fs_24 fw_medium mb_20">Consent form modification</h3>
								<p>For SFR Medical to have freedom to operate and maintain full ICO compliance, our name and reference to our Privacy Policy should be inserted on a force’s consent form. We will provide data security, appropriate policies and assurances as well as insurance.</p>
                                <div class="link mt_20">
                                    <div class="page-inner clearfix">
                                        <div class="left-column pull-left blue-color fs_18 lh_22 fw_bold">
                                            <i class="fa fa-chevron-left fs_14"></i>&nbsp;&nbsp;<a href="<?php echo @$weburl;?>procurement-process"> Procurement Process </a>
                                        </div>
                                        <div class="right-column pull-right blue-color fs_18 lh_22 fw_bold">
                                            <a href="<?php echo @$weburl;?>contracting-process"> Contracting Process  </a>&nbsp;&nbsp;<i class="fa fa-chevron-right fs_14"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php include("sidebar.php"); ?>
                        
                    </div>
                </div>
            </div>
        </section>

<?php include("footer.php"); ?>